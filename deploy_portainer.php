<?php
$url = 'https://ok.badirra.com';
$user = 'admin';
$pass = '1Elhomarhomar';

// 1. Authenticate
$ch = curl_init("$url/api/auth");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode(['username' => $user, 'password' => $pass]));
curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

$jwt = json_decode($response)->jwt;
if (!$jwt) {
    die("Auth failed: $response\n");
}
echo "Authenticated.\n";

// 2. Get Endpoints
$ch = curl_init("$url/api/endpoints");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Bearer $jwt"]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
curl_close($ch);

$endpoints = json_decode($response);
$endpointId = $endpoints[0]->Id;
echo "Using Endpoint ID: $endpointId\n";

// 3. Deploy Stack from Git
$stackName = "crmtest";
$gitUrl = "https://github.com/Salheen10/Badirra-CRM.git";

$ch = curl_init("$url/api/stacks/create/standalone/repository?endpointId=$endpointId");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
$payload = [
    'Name' => $stackName,
    'RepositoryURL' => $gitUrl,
    'RepositoryReferenceName' => 'refs/heads/main',
    'ComposeFile' => 'docker-compose.yml',
    'Env' => [
        ['name' => 'MYSQL_ROOT_PASSWORD', 'value' => 'badirra123'],
        ['name' => 'MYSQL_DATABASE', 'value' => 'badirra_crm'],
        ['name' => 'MYSQL_USER', 'value' => 'badirra'],
        ['name' => 'MYSQL_PASSWORD', 'value' => 'badirra123']
    ]
];
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $jwt",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

echo "Deploy Response Code: $httpCode\n";
echo "Deploy Response: $response\n";
