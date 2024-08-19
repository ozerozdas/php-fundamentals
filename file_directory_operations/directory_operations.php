<?php

/**
 * Create a directory
 */

// The name of the directory you want to create
$dirName = 'new_directory';

// Check if the directory already exists
if (!is_dir($dirName)) {
    // Create the directory with permissions (0777 means read, write, and execute for all users)
    if (mkdir($dirName, 0777, true)) {
        echo "Directory '$dirName' created successfully.";
    } else {
        echo "Failed to create directory '$dirName'.";
    }
} else {
    echo "Directory '$dirName' already exists.";
}

echo PHP_EOL;

/**
 * List the contents of a directory
 */

// The name of the directory you want to list
$dirName = 'new_directory';

// Check if the directory exists
if (is_dir($dirName)) {
    // Get the list of files and directories
    $files = scandir($dirName);

    echo "Contents of '$dirName':\n";

    // Loop through the directory contents
    foreach ($files as $file) {
        // Skip the special directories '.' and '..'
        if ($file !== '.' && $file !== '..') {
            echo $file . "\n";
        }
    }
} else {
    echo "Directory '$dirName' does not exist.";
}

echo PHP_EOL;

/**
 * Delete a directory
 */

// Check if the directory exists
if (is_dir($dirName)) {
    // Delete the directory
    if (rmdir($dirName)) {
        echo "Directory '$dirName' deleted successfully.";
    } else {
        echo "Failed to delete directory '$dirName'. Make sure it is empty.";
    }
} else {
    echo "Directory '$dirName' does not exist.";
}
