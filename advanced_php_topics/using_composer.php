<?php

/**
 * https://getcomposer.org/download/ - Download the latest version
 */

// Run after installing composer: composer require guzzlehttp/guzzle
// Run for update dependencies : composer update

require 'vendor/autoload.php'; // Include the Composer autoloader

use GuzzleHttp\Client;

$client = new Client();
$response = $client->request('GET', 'https://api.github.com');

echo $response->getStatusCode(); // 200
echo $response->getBody(); // Response body
