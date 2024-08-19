<?php
// Redirect to a new page
header("Location: https://example.com/newpage.php");

// Set the content type to JSON
header("Content-Type: application/json");
$data = ["name" => "Özer", "age" => 27];
echo json_encode($data);

// Download a file
$file = 'path/to/file.zip';

header('Content-Description: File Transfer');
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="' . basename($file) . '"');
header('Content-Length: ' . filesize($file));
readfile($file);

// Set headers to prevent caching
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past

// Set a custom header
header("X-Custom-Header: MyValue");

// Set headers to allow cross-origin resource sharing
header("Access-Control-Allow-Origin: *");  // Allow access from any domain
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE");
header("Access-Control-Allow-Headers: Content-Type");
