<?php

/**
 * Secure session management
 */

// Set secure session cookie parameters
session_set_cookie_params([
    'lifetime' => 0, // Session cookie expires when the browser is closed
    'path' => '/', // Cookie is available across the entire domain
    'domain' => 'yourdomain.com', // Replace with your domain
    'secure' => true, // Only send the cookie over HTTPS
    'httponly' => true, // Prevent JavaScript access
    'samesite' => 'Strict' // Prevent sending cookies with cross-site requests
]);
session_start();



/**
 * Regenerate session ID upon successful login
 */

session_regenerate_id(true);



/**
 * Session timeout
 */

session_start();

// Set timeout duration (in seconds)
$timeoutDuration = 1800; // 30 minutes

// Check if the last activity timestamp is set
if (isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity']) > $timeoutDuration) {
    // Last activity was too long ago, destroy the session
    session_unset();
    session_destroy();
}

// Update the last activity timestamp
$_SESSION['last_activity'] = time();



/**
 * Destroy session
 */

session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session cookie if it exists
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params['path'],
        $params['domain'],
        $params['secure'],
        $params['httponly']
    );
}

// Destroy the session
session_destroy();
