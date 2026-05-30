<?php
$options = [
    "ssl" => [
        "verify_peer" => false,
        "verify_peer_name" => false,
    ],
];
$context = stream_context_create($options);
$data = file_get_contents("https://getcomposer.org/download/latest-stable/composer.phar", false, $context);
file_put_contents("composer.phar", $data);
echo "Downloaded successfully.\n";
