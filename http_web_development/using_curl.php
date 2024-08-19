<?php
// Initialize a cURL session
$ch = curl_init();

// Set the URL
curl_setopt($ch, CURLOPT_URL, "https:///dummyjson.com/test");

// Return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the request
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    echo 'cURL error: ' . curl_error($ch);
} else {
    // Handle the response
    echo $response;
}

// Close the cURL session
curl_close($ch);
