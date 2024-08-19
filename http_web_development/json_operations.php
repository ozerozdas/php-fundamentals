<?php
$data = [
    "name" => "Özer",
    "age" => 27,
    "email" => "ozer@example.com",
    "languages" => ["PHP", "JavaScript", "Python"]
];

$jsonData = json_encode($data);

echo $jsonData;

/*
Output:
{
    "name": "Özer",
    "age": 27,
    "email": "ozer@example.com",
    "languages": ["PHP", "JavaScript", "Python"]
}
*/