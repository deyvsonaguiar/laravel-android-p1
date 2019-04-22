<?php
//header.payload.signature

//header
$header = [
    'algo' => 'HS256', //HMAC - SHA256
    'typ' => 'JWT'
];

$header_json = json_encode($header);
$header_base64 = base64_encode($header_json);

echo "Header JSON: $header_json";
echo "\n";
echo "Header JWT: $header_base64";
echo "\n";

$payload = [
    'first_name' => 'Deyvson',
    'last_name' => 'Aguiar',
    'email' => 'deyvsonaguiar@gmail.com',
    'exp' => (new DateTime())->getTimestamp()
];

$payload_json = json_encode($payload);
$payload_base64 = base64_encode($payload_json);

echo "\n";
echo "Payload JSON: $payload_json";
echo "\n";
echo "Payload JWT: $payload_base64";
echo "\n";

$key = 'fsadklrwq9347324onhjfa31247r2r934239hjnhnw402490onjnh54pp22588gd8805483lmmns';

$signature = hash_hmac('sha256', "$header_base64.$payload_base64", $key, true);
$signature_base64 = base64_encode($signature);

echo "\n";
echo "Signature RAW: $signature";
echo "\n";
echo "Signature JWT: $signature_base64";
echo "\n";

$token = "$header_base64.$payload_base64.$signature_base64";
echo "\n";
echo "TOKEN: $token";