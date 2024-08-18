<?php

// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute a SELECT query using PDO
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


// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute an INSERT query using PDO
    $query = "INSERT INTO users (name, email) VALUES (:name, :email)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', 'Özer');
    $stmt->bindParam(':email', 'ozer@test.com');
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute an UPDATE query using PDO
    $query = "UPDATE users SET email = :email WHERE name = :name";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':email', 'ozer@test.com');
    $stmt->bindParam(':name', 'Özer');
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}


// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Execute a DELETE query using PDO
    $query = "DELETE FROM users WHERE name = :name";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':name', 'Özer');
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
