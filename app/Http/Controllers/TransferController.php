<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class TransferController extends Controller
{
    public function calculateDistance(Request $request)
    {
        $fromPlaceId = $request->input('from_place_id');
        $toPlaceId = $request->input('to_place_id');
        $from = $request->input('from');
        $to = $request->input('to');
        $isRoundTrip = $request->input('is_round_trip', false);
        $passengerCount = (int) $request->input('passenger_count', 1);
        $departureDatetime = $request->input('departure_datetime');
        $returnDatetime = $request->input('return_datetime');

        $client = new Client();

        // Validate departure_datetime
        if (!$departureDatetime || strtotime($departureDatetime) < time()) {
            return response()->json([
                'error' => 'Invalid or past departure date and time provided.',
            ], 400);
        }

        // If round trip, validate return_datetime
        if ($isRoundTrip && (!$returnDatetime || strtotime($returnDatetime) < strtotime($departureDatetime))) {
            return response()->json([
                'error' => 'Invalid or earlier return date and time provided for round trip.',
            ], 400);
        }

        try {
            // Convert departure_datetime to Unix timestamp (Google Maps API expects seconds)
            $departureTimestamp = strtotime($departureDatetime);

            // Fetch distance and duration for outbound trip
            $response = $client->get('https://maps.googleapis.com/maps/api/directions/json', [
                'query' => [
                    'origin' => $fromPlaceId ? "place_id:$fromPlaceId" : $from,
                    'destination' => $toPlaceId ? "place_id:$toPlaceId" : $to,
                    'key' => config('services.google_maps.key'),
                    'mode' => 'driving',
                    'departure_time' => $departureTimestamp, // Use selected departure time
                    'traffic_model' => 'best_guess'
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            if ($data['status'] !== 'OK' || !isset($data['routes'][0]['legs'][0])) {
                return response()->json([
                    'error' => 'Could not calculate distance or duration for outbound trip: ' . ($data['error_message'] ?? 'Unknown error'),
                    'api_response' => $data // Full response for debugging
                ], 400);
            }

            $distance = round($data['routes'][0]['legs'][0]['distance']['value'] / 1000); // Convert to km and round
            $durationInTraffic = $data['routes'][0]['legs'][0]['duration_in_traffic']['value']; // Duration in seconds
            $fromCoordinates = $data['routes'][0]['legs'][0]['start_location'];
            $toCoordinates = $data['routes'][0]['legs'][0]['end_location'];

            // If round trip, fetch distance and duration for return trip
            if ($isRoundTrip) {
                $returnTimestamp = strtotime($returnDatetime);
                $returnResponse = $client->get('https://maps.googleapis.com/maps/api/directions/json', [
                    'query' => [
                        'origin' => $toPlaceId ? "place_id:$toPlaceId" : $to, // Reverse origin and destination
                        'destination' => $fromPlaceId ? "place_id:$fromPlaceId" : $from,
                        'key' => config('services.google_maps.key'),
                        'mode' => 'driving',
                        'departure_time' => $returnTimestamp, // Use selected return time
                        'traffic_model' => 'best_guess'
                    ]
                ]);

                $returnData = json_decode($returnResponse->getBody(), true);

                if ($returnData['status'] !== 'OK' || !isset($returnData['routes'][0]['legs'][0])) {
                    return response()->json([
                        'error' => 'Could not calculate distance or duration for return trip: ' . ($returnData['error_message'] ?? 'Unknown error'),
                        'api_response' => $returnData // Full response for debugging
                    ], 400);
                }

                $distance += round($returnData['routes'][0]['legs'][0]['distance']['value'] / 1000); // Add return distance
                $durationInTraffic += $returnData['routes'][0]['legs'][0]['duration_in_traffic']['value']; // Add return duration
            }

            // Calculate costs
            $standardCost = max(35, round($distance * 1.08));
            $luxuryCost = max(50, round($distance * 1.3));

            // Validate coordinates
            if (!$fromCoordinates || !$toCoordinates) {
                $errorMessage = 'Coordinates could not be retrieved: ';
                if (!$fromCoordinates) $errorMessage .= "Starting address ($from, place_id: $fromPlaceId) not found. ";
                if (!$toCoordinates) $errorMessage .= "Destination address ($to, place_id: $toPlaceId) not found.";
                return response()->json([
                    'distance' => $distance,
                    'duration_in_traffic' => $durationInTraffic,
                    'from' => $from,
                    'to' => $to,
                    'from_coordinates' => $fromCoordinates,
                    'to_coordinates' => $toCoordinates,
                    'error' => $errorMessage,
                    'api_response' => $data // Full response for debugging
                ], 400);
            }

            return response()->json([
                'distance' => $distance,
                'duration_in_traffic' => $durationInTraffic,
                'from' => $from,
                'to' => $to,
                'from_coordinates' => $fromCoordinates,
                'to_coordinates' => $toCoordinates,
                'standard_cost' => $standardCost,
                'luxury_cost' => $luxuryCost,
                'passenger_count' => $passengerCount,
                'is_round_trip' => $isRoundTrip
            ]);
        } catch (RequestException $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], 500);
        }
    }
}
