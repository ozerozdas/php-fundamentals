<?php

/**
 * This example shows how to connect to a database using PDO and MySQLi.
 * PHP pdo_mysql & mysqli extensions are required.
 */


// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute a query using PDO
    $query = "SELECT * FROM users WHERE name = 'Özer'";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        echo $row['name'] . "\n";
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


// Connect to database using MySQLi
$conn = new mysqli('localhost', 'testUser', 'testPass', 'testDb');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute a query using MySQLi
$query = "SELECT * FROM users WHERE name = 'Özer'";
$result = $conn->query($query);

while ($row = $result->fetch_assoc()) {
    echo $row['name'] . "\n";
}

$conn->close();
