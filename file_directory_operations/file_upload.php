<?php
// Specify the directory where the file will be uploaded
$targetDir = "uploads/";

// Get the file name
$targetFile = $targetDir . basename($_FILES["fileToUpload"]["name"]);

// Initialize a flag for upload success
$uploadOk = 1;

// Get the file type
$fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

// Check if the file is an actual file or a fake file
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}

// Check if the file already exists
if (file_exists($targetFile)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size (e.g., limit to 5MB)
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats (e.g., jpg, png, jpeg, gif)
$allowedTypes = ['jpg', 'png', 'jpeg', 'gif'];
if (!in_array($fileType, $allowedTypes)) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    // Try to upload the file
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
