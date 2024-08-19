<?php
// Assume $userInput is obtained from user input
$userInput = $_GET['input']; // For example, from a form submission
// Escape the user input before displaying it
$safeInput = htmlspecialchars($userInput, ENT_QUOTES, 'UTF-8');
echo 'User input: ' . $safeInput;

// For URLs
$urlInput = $_GET['url'];
$safeUrl = filter_var($urlInput, FILTER_SANITIZE_URL);
echo 'Safe URL: ' . htmlspecialchars($safeUrl, ENT_QUOTES, 'UTF-8');

// For email addresses
$emailInput = $_POST['email'];
$safeEmail = filter_var($emailInput, FILTER_SANITIZE_EMAIL);
echo 'Safe Email: ' . htmlspecialchars($safeEmail, ENT_QUOTES, 'UTF-8');
