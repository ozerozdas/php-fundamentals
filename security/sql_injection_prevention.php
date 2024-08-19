<?php

/**
 * To prevent SQL injection, use prepared statements to protect against SQL injection attacks.
 * To prepare a statement, use the PDO::prepare() method.
 * To bind parameters to the statement, use the PDOStatement::bindParam() method.
 * To execute the prepared statement, use the PDOStatement::execute() method.
 * To fetch the result, use the PDOStatement::fetch() method.
 * To close the statement, use the PDOStatement::closeCursor() method.
 * To handle errors, use the PDO::ERRMODE_EXCEPTION constant.
 */

$dsn = 'mysql:host=localhost;dbname=testDb';
$username = 'testUser';
$password = 'testPass';

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

// Example: Fetching a user by ID

// Assume $userId is obtained from user input
$userId = $_GET['user_id']; // Never trust user input directly

// Prepare the SQL statement
$sql = 'SELECT * FROM users WHERE id = :id';
$stmt = $pdo->prepare($sql);

// Bind the parameter to the statement
$stmt->bindParam(':id', $userId, PDO::PARAM_INT);

// Execute the statement
$stmt->execute();

// Fetch the result
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) {
    echo 'User found: ' . htmlspecialchars($user['username']);
} else {
    echo 'No user found with that ID.';
}
