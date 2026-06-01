<?php
$url = 'https://ok.badirra.com';
$user = 'admin';
$pass = '1Elhomarhomar';

$ch = curl_init("$url/api/auth");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['username' => $user, 'password' => $pass]));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

$jwt = json_decode($response)->jwt;

$ch = curl_init("$url/api/stacks");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $jwt"]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

echo "Stacks:\n";
$stacks = json_decode($response);
foreach ($stacks as $stack) {
    echo "- " . $stack->Name . " (" . $stack->Status . ")\n";
}
