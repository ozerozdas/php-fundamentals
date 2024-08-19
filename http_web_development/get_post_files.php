<?php

/**
 * Get: This type of parameter is used to get the value of a query string parameter.
 * For example, if the URL is "http://example.com/?name=Özer&age=27", then $_GET['name'] will be "Özer" and $_GET['age'] will be "27".
 */
$name = $_GET['name'];  // "Özer"
$age = $_GET['age'];    // 27

echo "Name: " . $name . PHP_EOL;
echo "Age: " . $age;

echo PHP_EOL;

/**
 * Post: This type of parameter is used to get the value of a form field.
 */
$name = $_POST['name'];  // "Özer"
$age = $_POST['age'];    // 27

echo "Name: " . $name . PHP_EOL;
echo "Age: " . $age;

echo PHP_EOL;

/**
 * Files: This type of parameter is used to get the value of a file field.
 */
if ($_FILES['uploadedFile']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['uploadedFile']['name']);

    if (move_uploaded_file($_FILES['uploadedFile']['tmp_name'], $uploadFile)) {
        echo "File successfully uploaded.";
    } else {
        echo "File upload failed.";
    }
} else {
    echo "Error during file upload.";
}

echo PHP_EOL;

/**
 * Session: This type of parameter is used to get the value of a session variable.
 */
session_start();
$_SESSION['username'] = 'Özer';
$_SESSION['role'] = 'admin';

echo "Session variables are set.";

echo PHP_EOL;

/**
 * Cookies: This type of parameter is used to get the value of a cookie.
 */
setcookie("user", "Özer", time() + (86400 * 30), "/"); // 86400 = 1 day

echo "Cookie set.";
