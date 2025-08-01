<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Transfer Reservation</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places,directions" async defer></script>
    <style>
        .pac-container { z-index: 1000; } /* z-index for Google Places suggestions */
        input:focus { outline: none; }
        #map { height: 300px; width: 100%; margin-top: 20px; }
        .error-message { color: red; margin-top: 10px; }
        .info { margin-top: 10px; color: #374151; }
        .vehicle-cost { color: #1E90FF; font-weight: bold; }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Transfer Reservation</h1>
        <div class="space-y-4">
            <!-- From - To -->
            <div class="flex space-x-4">
                <div class="flex-1 relative">
                    <input type="text" id="from" placeholder="From" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="hidden" id="from_place_id">
                </div>
                <div class="flex-1 relative">
                    <input type="text" id="to" placeholder="To" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="hidden" id="to_place_id">
                </div>
            </div>
            <!-- Date & Time -->
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="departure_datetime" class="block text-sm font-medium text-gray-700">Departure Date & Time</label>
                    <input type="datetime-local" id="departure_datetime" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
            <!-- Round-Trip Checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="round_trip" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                <label for="round_trip" class="ml-2 text-sm font-medium text-gray-700">Round Trip</label>
            </div>
            <!-- Return Date & Time (Visible if checkbox is selected) -->
            <div id="return_datetime_container" class="hidden">
                <label for="return_datetime" class="block text-sm font-medium text-gray-700">Return Date & Time</label>
                <input type="datetime-local" id="return_datetime" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <!-- Passenger Count -->
            <div>
                <label for="passenger_count" class="block text-sm font-medium text-gray-700">Number of Passengers</label>
                <select id="passenger_count" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
            </div>
            <!-- Book Now Button -->
            <button id="bookNow" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-full">Book Now</button>
        </div>
        <div id="vehicleSelection" class="mt-4 hidden">
            <h2 class="text-lg font-semibold">Vehicle Selection</h2>
            <div class="space-y-2">
                <div class="p-2 border rounded flex justify-between items-center">
                    <span>Standard Vehicle <span id="standardCost" class="vehicle-cost"></span></span>
                    <button data-vehicle="standard" onclick="selectVehicle('standard', 1.08, 35)" class="bg-green-500 text-white px-2 rounded">Select</button>
                </div>
                <div class="p-2 border rounded flex justify-between items-center">
                    <span>Luxury Vehicle <span id="luxuryCost" class="vehicle-cost"></span></span>
                    <button data-vehicle="luxury" onclick="selectVehicle('luxury', 1.3, 50)" class="bg-green-500 text-white px-2 rounded">Select</button>
                </div>
            </div>
        </div>
        <div id="map" class="mt-4 hidden"></div>
        <p id="routeInfo" class="info hidden"></p>
        <p id="errorMessage" class="error-message hidden"></p>
    </div>

    <script>
        const fromInput = document.getElementById('from');
        const toInput = document.getElementById('to');
        const fromPlaceIdInput = document.getElementById('from_place_id');
        const toPlaceIdInput = document.getElementById('to_place_id');
        const bookNowBtn = document.getElementById('bookNow');
        const vehicleSelection = document.getElementById('vehicleSelection');
        const mapDiv = document.getElementById('map');
        const routeInfo = document.getElementById('routeInfo');
        const errorMessage = document.getElementById('errorMessage');
        const standardCost = document.getElementById('standardCost');
        const luxuryCost = document.getElementById('luxuryCost');
        const departureDatetime = document.getElementById('departure_datetime');
        const roundTripCheckbox = document.getElementById('round_trip');
        const returnDatetimeContainer = document.getElementById('return_datetime_container');
        const returnDatetime = document.getElementById('return_datetime');
        const passengerCount = document.getElementById('passenger_count');
        let map, directionsService, directionsRenderer;

        // Set minimum date for date inputs (from today)
        function setMinDateTime() {
            const now = new Date();
            const minDateTime = now.toISOString().slice(0, 16); // YYYY-MM-DDTHH:mm
            departureDatetime.min = minDateTime;
            returnDatetime.min = minDateTime;
        }

        // Handle round-trip checkbox change
        roundTripCheckbox.addEventListener('change', () => {
            returnDatetimeContainer.className = roundTripCheckbox.checked ? '' : 'hidden';
            if (!roundTripCheckbox.checked) {
                returnDatetime.value = ''; // Reset return date if checkbox is unchecked
            }
        });

        // Initialize Google Places API autocomplete
        function initializeAutocomplete() {
            try {
                console.log('Google Maps API is loading...');
                const options = {
                    componentRestrictions: { country: '{{ config('services.google_maps.country_code') }}' }, // Dynamic country code from config
                    bounds: new google.maps.LatLngBounds(
                        new google.maps.LatLng(40.7669, 28.9759), // Istanbul southwest boundary
                        new google.maps.LatLng(41.2921, 29.3789)  // Istanbul northeast boundary
                    ),
                    types: ['geocode', 'establishment'], // Regions, airports, hotels
                    fields: ['name', 'types', 'formatted_address', 'geometry', 'place_id']
                };

                const fromAutocomplete = new google.maps.places.Autocomplete(fromInput, options);
                const toAutocomplete = new google.maps.places.Autocomplete(toInput, options);

                fromAutocomplete.addListener('place_changed', () => updateInput(fromInput, fromPlaceIdInput, fromAutocomplete));
                toAutocomplete.addListener('place_changed', () => updateInput(toInput, toPlaceIdInput, toAutocomplete));

                // Prevent manual input
                fromInput.addEventListener('blur', () => validateInput(fromInput, fromPlaceIdInput));
                toInput.addEventListener('blur', () => validateInput(toInput, toPlaceIdInput));

                console.log('Autocomplete initialized successfully.');
            } catch (error) {
                console.error('Failed to initialize autocomplete:', error);
                fromInput.placeholder = 'Error! Google Maps failed to load.';
                toInput.placeholder = 'Error! Google Maps failed to load.';
            }
        }

        function updateInput(input, placeIdInput, autocomplete) {
            const place = autocomplete.getPlace();
            if (place && place.geometry && place.geometry.location && place.place_id) {
                const isAirport = place.types.includes('airport');
                const isHotel = place.types.includes('lodging');
                input.value = place.name || place.formatted_address;
                placeIdInput.value = place.place_id;
                input.dataset.type = isAirport ? 'airport' : isHotel ? 'hotel' : 'place';
                input.dataset.valid = 'true';
                console.log(`Selected place: ${input.value}, Type: ${input.dataset.type}, Place ID: ${place.place_id}`);
            } else {
                input.dataset.valid = 'false';
                placeIdInput.value = '';
                console.warn(`Place not selected or coordinates missing: ${input.value}`);
            }
        }

        function validateInput(input, placeIdInput) {
            if (input.dataset.valid !== 'true') {
                input.value = '';
                placeIdInput.value = '';
                input.placeholder = 'Please select from suggested addresses';
                console.warn(`Invalid input: ${input.id}`);
            }
        }

        // Initialize map
        function initializeMap() {
            map = new google.maps.Map(mapDiv, {
                center: { lat: 41.0082, lng: 28.9784 }, // Istanbul center
                zoom: 10
            });
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({
                polylineOptions: {
                    strokeColor: '#1E90FF', // Blue route line
                    strokeWeight: 5
                }
            });
            directionsRenderer.setMap(map);
        }

        // Draw route
        function drawRoute(fromCoords, toCoords) {
            if (!fromCoords || !toCoords) {
                console.error('Missing coordinates:', { fromCoords, toCoords });
                errorMessage.textContent = 'Route could not be drawn, please select from suggested addresses.';
                errorMessage.className = 'error-message';
                return;
            }

            const request = {
                origin: new google.maps.LatLng(fromCoords.lat, fromCoords.lng),
                destination: new google.maps.LatLng(toCoords.lat, toCoords.lng),
                travelMode: google.maps.TravelMode.DRIVING,
                provideRouteAlternatives: true,
                drivingOptions: {
                    departureTime: new Date(departureDatetime.value || Date.now()),
                    trafficModel: 'bestguess'
                }
            };

            directionsService.route(request, (result, status) => {
                if (status === google.maps.DirectionsStatus.OK) {
                    directionsRenderer.setDirections(result);
                    console.log('Route drawn:', result);
                    errorMessage.className = 'error-message hidden';
                } else {
                    console.error('Failed to draw route:', status, result);
                    errorMessage.textContent = `Failed to draw route: ${status}. Please select from suggested addresses.`;
                    errorMessage.className = 'error-message';
                }
            });
        }

        // Format duration (seconds to minutes/hours)
        function formatDuration(seconds) {
            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            if (hours > 0) {
                return `${hours} hours ${minutes} minutes`;
            }
            return `${minutes} minutes`;
        }

        // Calculate cost
        function calculateCost(distance, ratePerKm, minCost, passengerCount) {
            if (!distance) return 'Not calculated';
            return `€${Math.max(minCost, Math.round(distance * ratePerKm)) * passengerCount}`;
        }

        // Initialize autocomplete and map when Google Maps API loads
        window.addEventListener('load', () => {
            if (typeof google === 'object' && typeof google.maps === 'object') {
                console.log('Google Maps API loaded.');
                initializeAutocomplete();
                initializeMap();
                setMinDateTime();
            } else {
                console.error('Google Maps API failed to load.');
                setTimeout(() => {
                    if (typeof google === 'undefined') {
                        fromInput.placeholder = 'Error! Google Maps failed to load.';
                        toInput.placeholder = 'Error! Google Maps failed to load.';
                    }
                }, 2000);
            }
        });

        // Book Now button click
        bookNowBtn.addEventListener('click', () => {
            if (fromInput.value && toInput.value && fromPlaceIdInput.value && toPlaceIdInput.value && fromInput.dataset.valid === 'true' && toInput.dataset.valid === 'true' && departureDatetime.value) {
                if (roundTripCheckbox.checked && !returnDatetime.value) {
                    errorMessage.textContent = 'Please select return date and time.';
                    errorMessage.className = 'error-message';
                    return;
                }

                console.log('Book Now clicked, sending request:', {
                    from: fromInput.value,
                    to: toInput.value,
                    from_place_id: fromPlaceIdInput.value,
                    to_place_id: toPlaceIdInput.value,
                    departure_datetime: departureDatetime.value,
                    return_datetime: returnDatetime.value,
                    passenger_count: passengerCount.value,
                    is_round_trip: roundTripCheckbox.checked
                });

                fetch('/calculate-distance', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({
                        from: fromInput.value,
                        to: toInput.value,
                        from_place_id: fromPlaceIdInput.value,
                        to_place_id: toPlaceIdInput.value,
                        departure_datetime: departureDatetime.value,
                        return_datetime: roundTripCheckbox.checked ? returnDatetime.value : null,
                        passenger_count: passengerCount.value,
                        is_round_trip: roundTripCheckbox.checked
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('API Response:', data);
                    if (data.error) {
                        errorMessage.textContent = data.error;
                        errorMessage.className = 'error-message';
                        vehicleSelection.className = 'mt-4 hidden';
                        mapDiv.className = 'mt-4 hidden';
                        routeInfo.className = 'info hidden';
                    } else {
                        vehicleSelection.className = 'mt-4';
                        mapDiv.className = 'mt-4'; // Show map
                        routeInfo.className = 'info';
                        routeInfo.innerHTML = `
                            Distance: ${data.distance} km<br>
                            Estimated Duration (Including Traffic): ${formatDuration(data.duration_in_traffic)}<br>
                            ${data.is_round_trip ? 'Round Trip<br>' : ''}
                            Number of Passengers: ${data.passenger_count}
                        `;
                        window.currentDistance = data.distance;

                        // Display vehicle costs
                        standardCost.textContent = data.standard_cost ? `€${data.standard_cost}` : 'Not calculated';
                        luxuryCost.textContent = data.luxury_cost ? `€${data.luxury_cost}` : 'Not calculated';

                        if (data.from_coordinates && data.to_coordinates) {
                            drawRoute(data.from_coordinates, data.to_coordinates);
                        } else {
                            console.error('Missing coordinates:', data);
                            errorMessage.textContent = data.error || 'Route could not be drawn, please select from suggested addresses.';
                            errorMessage.className = 'error-message';
                        }
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    errorMessage.textContent = 'An error occurred: ' + error.message;
                    errorMessage.className = 'error-message';
                });
            } else {
                errorMessage.textContent = 'Please fill in all required fields (From, To, Departure Date & Time) and select from suggested addresses.';
                errorMessage.className = 'error-message';
            }
        });

        // Vehicle selection
        function selectVehicle(vehicle, ratePerKm, minCost) {
            if (!window.currentDistance) {
                console.error('Distance not defined');
                errorMessage.textContent = 'Error: Distance could not be calculated, please try again.';
                errorMessage.className = 'error-message';
                return;
            }

            // Reset all buttons
            const buttons = document.querySelectorAll('[data-vehicle]');
            buttons.forEach(btn => {
                btn.className = 'bg-green-500 text-white px-2 rounded';
                btn.textContent = 'Select';
            });

            // Update selected button
            const selectedButton = document.querySelector(`[data-vehicle="${vehicle}"]`);
            if (selectedButton) {
                selectedButton.className = 'bg-blue-500 text-white px-2 rounded';
                selectedButton.textContent = 'Selected';
            }
        }
    </script>
</body>
</html>
