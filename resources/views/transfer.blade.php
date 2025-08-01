<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Transfer Rezervasyonu</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('services.google_maps.key') }}&libraries=places,directions" async defer></script>
    <style>
        .pac-container { z-index: 1000; } /* Google Places önerileri için z-index */
        input:focus { outline: none; }
        #map { height: 300px; width: 100%; margin-top: 20px; }
        .error-message { color: red; margin-top: 10px; }
        .info { margin-top: 10px; color: #374151; }
        .vehicle-cost { color: #1E90FF; font-weight: bold; }
    </style>
</head>
<body class="bg-black flex items-center justify-center min-h-screen">
    <div class="bg-white p-6 rounded-lg shadow-lg w-full max-w-md">
        <h1 class="text-2xl font-bold mb-4 text-center">Transfer Rezervasyonu</h1>
        <div class="space-y-4">
            <!-- Nereden - Nereye -->
            <div class="flex space-x-4">
                <div class="flex-1 relative">
                    <input type="text" id="from" placeholder="Nereden" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="hidden" id="from_place_id">
                </div>
                <div class="flex-1 relative">
                    <input type="text" id="to" placeholder="Nereye" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <input type="hidden" id="to_place_id">
                </div>
            </div>
            <!-- Tarih & Saat -->
            <div class="flex space-x-4">
                <div class="flex-1">
                    <label for="departure_datetime" class="block text-sm font-medium text-gray-700">Gidiş Tarih & Saat</label>
                    <input type="datetime-local" id="departure_datetime" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>
            </div>
            <!-- Gidiş-Dönüş Checkbox -->
            <div class="flex items-center">
                <input type="checkbox" id="round_trip" class="h-4 w-4 text-blue-500 focus:ring-blue-500 border-gray-300 rounded">
                <label for="round_trip" class="ml-2 text-sm font-medium text-gray-700">Gidiş-Dönüş</label>
            </div>
            <!-- Dönüş Tarih & Saat (Checkbox seçilirse görünecek) -->
            <div id="return_datetime_container" class="hidden">
                <label for="return_datetime" class="block text-sm font-medium text-gray-700">Dönüş Tarih & Saat</label>
                <input type="datetime-local" id="return_datetime" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
            <!-- Kişi Sayısı -->
            <div>
                <label for="passenger_count" class="block text-sm font-medium text-gray-700">Kişi Sayısı</label>
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
            <!-- Book Now Butonu -->
            <button id="bookNow" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 w-full">Book Now</button>
        </div>
        <div id="vehicleSelection" class="mt-4 hidden">
            <h2 class="text-lg font-semibold">Araç Seçimi</h2>
            <div class="space-y-2">
                <div class="p-2 border rounded flex justify-between items-center">
                    <span>Standart Araç <span id="standardCost" class="vehicle-cost"></span></span>
                    <button data-vehicle="standard" onclick="selectVehicle('standard', 1.1, 35)" class="bg-green-500 text-white px-2 rounded">Seç</button>
                </div>
                <div class="p-2 border rounded flex justify-between items-center">
                    <span>Lüks Araç <span id="luxuryCost" class="vehicle-cost"></span></span>
                    <button data-vehicle="luxury" onclick="selectVehicle('luxury', 1.5, 50)" class="bg-green-500 text-white px-2 rounded">Seç</button>
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

        // Tarih input’ları için minimum tarih ayarı (bugünden itibaren)
        function setMinDateTime() {
            const now = new Date();
            const minDateTime = now.toISOString().slice(0, 16); // YYYY-MM-DDTHH:mm
            departureDatetime.min = minDateTime;
            returnDatetime.min = minDateTime;
        }

        // Gidiş-dönüş checkbox’ı değiştiğinde
        roundTripCheckbox.addEventListener('change', () => {
            returnDatetimeContainer.className = roundTripCheckbox.checked ? '' : 'hidden';
            if (!roundTripCheckbox.checked) {
                returnDatetime.value = ''; // Checkbox kaldırılırsa dönüş tarihini sıfırla
            }
        });

        // Google Places API ile autocomplete başlatma
        function initializeAutocomplete() {
            try {
                console.log('Google Maps API yükleniyor...');
                const options = {
                    componentRestrictions: { country: 'tr' }, // Sadece Türkiye
                    bounds: new google.maps.LatLngBounds(
                        new google.maps.LatLng(40.7669, 28.9759), // İstanbul’un güneybatı sınırı
                        new google.maps.LatLng(41.2921, 29.3789)  // İstanbul’un kuzeydoğu sınırı
                    ),
                    types: ['geocode', 'establishment'], // Bölgeler, havalimanları, oteller
                    fields: ['name', 'types', 'formatted_address', 'geometry', 'place_id']
                };

                const fromAutocomplete = new google.maps.places.Autocomplete(fromInput, options);
                const toAutocomplete = new google.maps.places.Autocomplete(toInput, options);

                fromAutocomplete.addListener('place_changed', () => updateInput(fromInput, fromPlaceIdInput, fromAutocomplete));
                toAutocomplete.addListener('place_changed', () => updateInput(toInput, toPlaceIdInput, toAutocomplete));

                // Manuel girişi engelle
                fromInput.addEventListener('blur', () => validateInput(fromInput, fromPlaceIdInput));
                toInput.addEventListener('blur', () => validateInput(toInput, toPlaceIdInput));

                console.log('Autocomplete başarıyla başlatıldı.');
            } catch (error) {
                console.error('Autocomplete başlatılamadı:', error);
                fromInput.placeholder = 'Hata! Google Haritalar yüklenemedi.';
                toInput.placeholder = 'Hata! Google Haritalar yüklenemedi.';
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
                console.log(`Seçilen yer: ${input.value}, Tür: ${input.dataset.type}, Place ID: ${place.place_id}`);
            } else {
                input.dataset.valid = 'false';
                placeIdInput.value = '';
                console.warn(`Yer seçilmedi veya koordinatlar eksik: ${input.value}`);
            }
        }

        function validateInput(input, placeIdInput) {
            if (input.dataset.valid !== 'true') {
                input.value = '';
                placeIdInput.value = '';
                input.placeholder = 'Lütfen önerilen adreslerden seçin';
                console.warn(`Geçersiz giriş: ${input.id}`);
            }
        }

        // Haritayı başlatma
        function initializeMap() {
            map = new google.maps.Map(mapDiv, {
                center: { lat: 41.0082, lng: 28.9784 }, // İstanbul merkezi
                zoom: 10
            });
            directionsService = new google.maps.DirectionsService();
            directionsRenderer = new google.maps.DirectionsRenderer({
                polylineOptions: {
                    strokeColor: '#1E90FF', // Mavi rota çizgisi
                    strokeWeight: 5
                }
            });
            directionsRenderer.setMap(map);
        }

        // Rota çizme
        function drawRoute(fromCoords, toCoords) {
            if (!fromCoords || !toCoords) {
                console.error('Koordinatlar eksik:', { fromCoords, toCoords });
                errorMessage.textContent = 'Rota çizilemedi, lütfen önerilen adreslerden seçin.';
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
                    console.log('Rota çizildi:', result);
                    errorMessage.className = 'error-message hidden';
                } else {
                    console.error('Rota çizilemedi:', status, result);
                    errorMessage.textContent = `Rota çizilemedi: ${status}. Lütfen önerilen adreslerden seçin.`;
                    errorMessage.className = 'error-message';
                }
            });
        }

        // Süreyi formatlama (saniye -> dakika/saat)
        function formatDuration(seconds) {
            const hours = Math.floor(seconds / 3600);
            const minutes = Math.floor((seconds % 3600) / 60);
            if (hours > 0) {
                return `${hours} saat ${minutes} dakika`;
            }
            return `${minutes} dakika`;
        }

        // Ücret hesaplama
        function calculateCost(distance, ratePerKm, minCost, passengerCount) {
            if (!distance) return 'Hesaplanamadı';
            return `€${Math.max(minCost, Math.round(distance * ratePerKm)) * passengerCount}`;
        }

        // Google Maps API yüklendiğinde autocomplete ve haritayı başlat
        window.addEventListener('load', () => {
            if (typeof google === 'object' && typeof google.maps === 'object') {
                console.log('Google Maps API yüklendi.');
                initializeAutocomplete();
                initializeMap();
                setMinDateTime();
            } else {
                console.error('Google Maps API yüklenemedi.');
                setTimeout(() => {
                    if (typeof google === 'undefined') {
                        fromInput.placeholder = 'Hata! Google Haritalar yüklenemedi.';
                        toInput.placeholder = 'Hata! Google Haritalar yüklenemedi.';
                    }
                }, 2000);
            }
        });

        // Book Now butonuna tıklama
        bookNowBtn.addEventListener('click', () => {
            if (fromInput.value && toInput.value && fromPlaceIdInput.value && toPlaceIdInput.value && fromInput.dataset.valid === 'true' && toInput.dataset.valid === 'true' && departureDatetime.value) {
                if (roundTripCheckbox.checked && !returnDatetime.value) {
                    errorMessage.textContent = 'Lütfen dönüş tarih ve saatini seçin.';
                    errorMessage.className = 'error-message';
                    return;
                }

                console.log('Book Now tıklandı, istek gönderiliyor:', {
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
                    console.log('API Yanıtı:', data);
                    if (data.error) {
                        errorMessage.textContent = data.error;
                        errorMessage.className = 'error-message';
                        vehicleSelection.className = 'mt-4 hidden';
                        mapDiv.className = 'mt-4 hidden';
                        routeInfo.className = 'info hidden';
                    } else {
                        vehicleSelection.className = 'mt-4';
                        mapDiv.className = 'mt-4'; // Haritayı göster
                        routeInfo.className = 'info';
                        routeInfo.innerHTML = `
                            Mesafe: ${data.distance} km<br>
                            Tahmini Süre (Trafik Dahil): ${formatDuration(data.duration_in_traffic)}<br>
                            ${data.is_round_trip ? 'Gidiş-Dönüş<br>' : ''}
                            Kişi Sayısı: ${data.passenger_count}
                        `;
                        window.currentDistance = data.distance;

                        // Araç ücretlerini hesapla ve göster
                        standardCost.textContent = data.standard_cost ? `€${data.standard_cost}` : 'Hesaplanamadı';
                        luxuryCost.textContent = data.luxury_cost ? `€${data.luxury_cost}` : 'Hesaplanamadı';

                        if (data.from_coordinates && data.to_coordinates) {
                            drawRoute(data.from_coordinates, data.to_coordinates);
                        } else {
                            console.error('Koordinatlar eksik:', data);
                            errorMessage.textContent = data.error || 'Rota çizilemedi, lütfen önerilen adreslerden seçin.';
                            errorMessage.className = 'error-message';
                        }
                    }
                })
                .catch(error => {
                    console.error('Hata:', error);
                    errorMessage.textContent = 'Hata oluştu: ' + error.message;
                    errorMessage.className = 'error-message';
                });
            } else {
                errorMessage.textContent = 'Lütfen tüm zorunlu alanları doldurun (Nereden, Nereye, Gidiş Tarih & Saat) ve önerilen adreslerden seçin.';
                errorMessage.className = 'error-message';
            }
        });

        // Araç seçimi
        function selectVehicle(vehicle, ratePerKm, minCost) {
            if (!window.currentDistance) {
                console.error('Mesafe tanımlı değil');
                errorMessage.textContent = 'Hata: Mesafe hesaplanamadı, lütfen tekrar deneyin.';
                errorMessage.className = 'error-message';
                return;
            }

            // Tüm butonları sıfırla
            const buttons = document.querySelectorAll('[data-vehicle]');
            buttons.forEach(btn => {
                btn.className = 'bg-green-500 text-white px-2 rounded';
                btn.textContent = 'Seç';
            });

            // Seçilen butonu güncelle
            const selectedButton = document.querySelector(`[data-vehicle="${vehicle}"]`);
            if (selectedButton) {
                selectedButton.className = 'bg-blue-500 text-white px-2 rounded';
                selectedButton.textContent = 'Seçildi';
            }
        }
    </script>
</body>
</html>
