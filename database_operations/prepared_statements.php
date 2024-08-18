<?php

// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare a SQL query with placeholders for the data
    $query = "SELECT * FROM users WHERE name = :name AND email = :email";
    $stmt = $conn->prepare($query);

    // Bind the data to the placeholders
    $stmt->bindParam(':name', 'Özer');
    $stmt->bindParam(':email', 'ozer@test.com');

    // Execute the prepared statement
    $stmt->execute();

    // Fetch the results
    $results = $stmt->fetchAll();

    foreach ($results as $row) {
        echo $row['name'] . " - " . $row['email'] . "\n";
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
