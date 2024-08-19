<?php

/**
 * Reading from a File
 */

// The name of the file to read
$filename = 'example.txt';

// Check if the file exists
if (file_exists($filename)) {
    // Open the file for reading
    $file = fopen($filename, 'r');

    // Read the entire file content
    $content = fread($file, filesize($filename));

    // Close the file
    fclose($file);

    // Display the content
    echo "File Content:\n$content";
} else {
    echo "File does not exist.";
}

echo PHP_EOL;

/**
 * Writing to a File
 */

// The content you want to add to the file
$newContent = "\nThis is the new content being appended to the file.";

// Open the file for writing (append mode)
$file = fopen($filename, 'a');

// Write the content to the file
fwrite($file, $newContent);

// Close the file
fclose($file);

echo "Content appended to the file successfully.";
