<?php

function upload_file($file)
{

    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_name = generateRandomString();
    $file_path = $target_dir . "" . $file_name . "." . $imageFileType;

    // Check if image file is a actual image or fake image
    $check = getimagesize($file["tmp_name"]);
    if ($check == false) {
        die("File is not an image.");
        $uploadOk = 0;
    } else {
        $uploadOk = 1;
    }


    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        echo $file_path;
        if (move_uploaded_file($file["tmp_name"], $file_path)) {
            // echo "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.";
            return $file_path;
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    }
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
