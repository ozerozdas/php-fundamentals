<?php
require_once 'sample_api/api.php';

header("Content-Type: application/json");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode('/', $uri);

// Handle API requests
if ($uri[1] !== 'users') {
    header("HTTP/1.1 404 Not Found");
    echo json_encode(["message" => "Resource not found"]);
    exit();
}

$method = $_SERVER['REQUEST_METHOD'];
$api = new API();
$response = $api->processRequest($method, $uri);

echo json_encode($response);
