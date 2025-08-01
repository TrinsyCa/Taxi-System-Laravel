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

        $client = new Client();

        try {
            // Directions API ile mesafe, süre ve koordinatları al
            $response = $client->get('https://maps.googleapis.com/maps/api/directions/json', [
                'query' => [
                    'origin' => $fromPlaceId ? "place_id:$fromPlaceId" : $from,
                    'destination' => $toPlaceId ? "place_id:$toPlaceId" : $to,
                    'key' => config('services.google_maps.key'),
                    'mode' => 'driving',
                    'departure_time' => 'now', // Trafik verisi için
                    'traffic_model' => 'best_guess'
                ]
            ]);

            $data = json_decode($response->getBody(), true);

            if ($data['status'] === 'OK' && isset($data['routes'][0]['legs'][0])) {
                $distance = round($data['routes'][0]['legs'][0]['distance']['value'] / 1000); // km cinsine çevir ve tam sayıya yuvarla
                $durationInTraffic = $data['routes'][0]['legs'][0]['duration_in_traffic']['value']; // saniye cinsinden

                // Koordinatları routes.legs’ten al
                $fromCoordinates = null;
                $toCoordinates = null;
                if (isset($data['routes'][0]['legs'][0]['start_location'])) {
                    $fromCoordinates = $data['routes'][0]['legs'][0]['start_location'];
                }
                if (isset($data['routes'][0]['legs'][0]['end_location'])) {
                    $toCoordinates = $data['routes'][0]['legs'][0]['end_location'];
                }

                if (!$fromCoordinates || !$toCoordinates) {
                    $errorMessage = 'Koordinatlar alınamadı: ';
                    if (!$fromCoordinates) $errorMessage .= "Başlangıç adresi ($from, place_id: $fromPlaceId) bulunamadı. ";
                    if (!$toCoordinates) $errorMessage .= "Bitiş adresi ($to, place_id: $toPlaceId) bulunamadı.";
                    return response()->json([
                        'distance' => $distance,
                        'duration_in_traffic' => $durationInTraffic,
                        'from' => $from,
                        'to' => $to,
                        'from_coordinates' => $fromCoordinates,
                        'to_coordinates' => $toCoordinates,
                        'error' => $errorMessage,
                        'api_response' => $data // Hata ayıklama için tam yanıt
                    ], 400);
                }

                return response()->json([
                    'distance' => $distance,
                    'duration_in_traffic' => $durationInTraffic,
                    'from' => $from,
                    'to' => $to,
                    'from_coordinates' => $fromCoordinates,
                    'to_coordinates' => $toCoordinates
                ]);
            } else {
                return response()->json([
                    'error' => 'Mesafe veya süre hesaplanamadı: ' . ($data['error_message'] ?? 'Bilinmeyen hata'),
                    'api_response' => $data // Hata ayıklama için tam yanıt
                ], 400);
            }
        } catch (RequestException $e) {
            return response()->json(['error' => 'API isteği başarısız: ' . $e->getMessage()], 500);
        }
    }
}
