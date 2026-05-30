<?php
// We will just do a standard SuiteCRM login to get the cookie.
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/index.php?module=Users&action=Authenticate');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
// Provide admin credentials (assuming admin/admin, or try to bypass if we don't know it)
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query(array(
    'module' => 'Users',
    'action' => 'Authenticate',
    'user_name' => 'admin',
    'user_password' => 'admin', // guess
    'Login' => 'Login'
)));
curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');
$login = curl_exec($ch);

// Now request Opportunities List View
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8080/index.php?module=Opportunities&action=index&ajax_load=1');
curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-Requested-With: XMLHttpRequest'));
$output = curl_exec($ch);
curl_close($ch);

file_put_contents('captured_ajax.log', $output);
echo "Captured size: " . strlen($output) . "\n";
if (substr($output, 0, 1) === '{') {
    $decoded = json_decode($output, true);
    if ($decoded !== null) {
        echo "JSON IS VALID!\n";
    } else {
        echo "JSON DECODE ERROR: " . json_last_error_msg() . "\n";
        echo "First 50 chars: " . substr($output, 0, 50) . "\n";
        echo "Last 50 chars: " . substr($output, -50) . "\n";
    }
} else {
    echo "NOT JSON! Starts with: " . bin2hex(substr($output, 0, 10)) . "\n";
}
