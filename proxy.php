<?php
// Set the target URL
$target_url = "https://api.privatbank.ua/p24api/pubinfo?exchange&json&coursid=11";

// Open the cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $target_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session and get the API response
$result = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Output the API response
header("Content-Type: application/json");
echo $result;
?>
