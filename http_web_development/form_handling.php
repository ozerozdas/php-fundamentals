<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));

    // Validate the form data
    if (empty($name) || empty($email)) {
        echo "Name and email are required fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Process the data (e.g., save to database, send an email)
        echo "Name: " . $name . PHP_EOL;
        echo "Email: " . $email . PHP_EOL;

        // Example: Send a confirmation email (this requires additional mail setup)
        // mail($email, "Form Submission", "Thank you for your submission!");
    }
} else {
    echo "Please submit the form.";
}
