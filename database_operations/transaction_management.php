<?php

// Connect to database using PDO
$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Begin transaction
    $conn->beginTransaction();

    try {
        // Execute operations as part of the transaction
        $stmt1 = $conn->prepare("UPDATE users SET name = ? WHERE id = ?");
        $stmt1->execute(['Özer', 1]);

        $stmt2 = $conn->prepare("INSERT INTO orders (user_id, product_id) VALUES (?, ?)");
        $stmt2->execute([1, 42]);

        // Commit transaction
        $conn->commit();
    } catch (PDOException $e) {
        // Rollback transaction if an error occurs
        $conn->rollBack();
        echo 'Error: ' . $e->getMessage();
    }
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
