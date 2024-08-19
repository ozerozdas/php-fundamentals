<?php
session_start();

// Generate a CSRF token if not already set
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
$csrfToken = $_SESSION['csrf_token'];

/**
 * Prevent cross-site request forgery (CSRF) attacks
 * by checking the CSRF token in the request
 * and comparing it with the session CSRF token
 */
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userToken = $_POST['csrf_token'] ?? '';

    if (hash_equals($_SESSION['csrf_token'], $userToken)) {
        // Token is valid, process the form submission
        echo 'Form submitted successfully.';
    } else {
        // Token is invalid, handle the error
        echo 'Invalid CSRF token.';
    }
}
