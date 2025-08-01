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

        $client = new Client();

        try {
            // Fetch distance, duration, and coordinates using Directions API
            $response = $client->get('https://maps.googleapis.com/maps/api/directions/json', [
                'query' => [
                    'origin' => $fromPlaceId ? "place_id:$fromPlaceId" : $from,
                    'destination' => $toPlaceId ? "place_id:$toPlaceId" : $to,
                    'key' => config('services.google_maps.key'),
                    'mode' => 'driving',
                    'departure_time' => 'now', // For traffic data
                    'traffic_model' => 'best_guess'
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            if ($data['status'] === 'OK' && isset($data['routes'][0]['legs'][0])) {
                $distance = round($data['routes'][0]['legs'][0]['distance']['value'] / 1000); // Convert to km and round to nearest integer
                $durationInTraffic = $data['routes'][0]['legs'][0]['duration_in_traffic']['value']; // Duration in seconds

                // Double the distance for round trip
                if ($isRoundTrip) {
                    $distance *= 2;
                    $durationInTraffic *= 2;
                }

                // Calculate costs (can be multiplied by passenger count if needed)
                $standardCost = max(35, round($distance * 1.08));
                $luxuryCost = max(50, round($distance * 1.3));

                // Fetch coordinates from routes.legs
                $fromCoordinates = null;
                $toCoordinates = null;
                if (isset($data['routes'][0]['legs'][0]['start_location'])) {
                    $fromCoordinates = $data['routes'][0]['legs'][0]['start_location'];
                }
                if (isset($data['routes'][0]['legs'][0]['end_location'])) {
                    $toCoordinates = $data['routes'][0]['legs'][0]['end_location'];
                }

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
            } else {
                return response()->json([
                    'error' => 'Distance or duration could not be calculated: ' . ($data['error_message'] ?? 'Unknown error'),
                    'api_response' => $data // Full response for debugging
                ], 400);
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'API request failed: ' . $e->getMessage()], 500);
        }
    }
}
