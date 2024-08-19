<?php

/**
 * Password Hashing
 */

// User's password (from form submission)
$password = 'user_password';

// Hash the password
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// Store $hashedPassword in your database
echo 'Hashed Password: ' . $hashedPassword;



/**
 * Verifying Password
 */

// Password from user input (e.g., form submission)
$inputPassword = 'user_password';
// Password hash retrieved from the database
$storedHash = '$2y$10$7K.RXbVADzDAadKMiMExjeRpP4P2cV0fF3F1gtTS7w5QoB6UG5dWm'; // Example hash
// Verify the password
if (password_verify($inputPassword, $storedHash)) {
    echo 'Password is valid!';
} else {
    echo 'Invalid password.';
}



/**
 * Handling Password Changes
 */

// Retrieve the hashed password from the database
$storedHash = '$2y$10$7K.RXbVADzDAadKMiMExjeRpP4P2cV0fF3F1gtTS7w5QoB6UG5dWm'; // Example hash

// Check if rehashing is needed
$options = ['cost' => 12]; // Adjust the cost as needed
if (password_needs_rehash($storedHash, PASSWORD_DEFAULT, $options)) {
    // Hash the password again with updated options
    $newHashedPassword = password_hash('user_password', PASSWORD_DEFAULT, $options);
    // Update the password in the database with $newHashedPassword
}
