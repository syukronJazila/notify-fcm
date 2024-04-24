<?php

use Google\Auth\Credentials\ServiceAccountCredentials;
use Google\Auth\HttpHandler\HttpHandlerFactory;

require __DIR__ . '/vendor/autoload.php';

$jsonData = file_get_contents("php://input");

$data = json_decode($jsonData, true);

$title = $data["title"];
$message = $data["message"];

$credential = new ServiceAccountCredentials(
    "https://www.googleapis.com/auth/firebase.messaging",
    json_decode(file_get_contents(__DIR__ . "/pvKey.json"), true)
);

$token = $credential->fetchAuthToken(HttpHandlerFactory::build());

$ch = curl_init("https://fcm.googleapis.com/v1/projects/flodec-p24s/messages:send");

curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Content-Type: application/json',
    'Authorization: Bearer '.$token['access_token']
]);

    $payload = json_encode([
        "message" => [
            "topic" => "notif",
            "notification" => [
                "body" => $message,
                "title" => $title
            ],
            "android" => [
                "notification" => [
                  "icon" => "baseline_info_24"
                ]
            ],
        ]
    ]);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    
    $response = curl_exec($ch);
    
    echo $response;

curl_close($ch);
