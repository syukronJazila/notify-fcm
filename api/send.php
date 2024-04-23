<?php

use Google\Auth\Credentials\ServiceAccountCredentials;
use Google\Auth\HttpHandler\HttpHandlerFactory;

echo "Test!!! Bisanya"

// require '/vendor/autoload.php';

// $credential = new ServiceAccountCredentials(
//     "https://www.googleapis.com/auth/firebase.messaging",
//     json_decode(file_get_contents("pvKey.json"), true)
// );

// $token = $credential->fetchAuthToken(HttpHandlerFactory::build());

// $ch = curl_init("https://fcm.googleapis.com/v1/projects/flodec-p24s/messages:send");

// curl_setopt($ch, CURLOPT_HTTPHEADER, [
//     'Content-Type: application/json',
//     'Authorization: Bearer '.$token['access_token']
// ]);

//     $payload = json_encode([
//         "message" => [
//             "topic" => "notif",
//             "notification" => [
//                 "body" => "Hujan deras terjadi di Jl. Gaperta Ujung, 10 menit lagi akan banjir nih",
//                 "title" => "Flodecs"
//             ],
//             "android" => [
//                 "notification" => [
//                   "icon" => "baseline_info_24"
//                 ]
//             ],
//         ]
//     ]);

//     curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
//     curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    
//     $response = curl_exec($ch);
    
//     echo $response;

// curl_close($ch);
