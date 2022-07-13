<?php

function upload_file($file)
{


    $target_dir = "uploads/";
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $file_name = generateRandomString();
    $file_path = $target_dir . "" . $file_name . "." . $imageFileType;

    // Allow certain file formats
    if (
        $imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "pdf" || $imageFileType != "doc" || $imageFileType != "docx"
        || $imageFileType != "gif"
    ) {
        $imageFileType = $imageFileType;
    } else {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
        $uploadOk = 0;
    }


    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {


        if (move_uploaded_file($file["tmp_name"], $file_path)) {
            // echo "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.";
            return $file_path;
        } else {
            die("Sorry, there was an error uploading your file.");
        }
    }
}

function multiple_upload($file)
{

    $target_dir = "uploads/";
    $uploadOk = 1;

    $countfiles  = count($_FILES['qualification']['name']);

    for ($i = 0; $i < $countfiles; $i++) {
        $file_name = generateRandomString();
        $target_file = $target_dir . basename($_FILES['qualification']['name'][$i]);

        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $file_path = $target_dir . "" . $file_name . "." . $imageFileType;

        $qualifications[] = $file_path;
        // Allow certain file formats

        if (
            $imageFileType != "jpg" || $imageFileType != "png" || $imageFileType != "jpeg" || $imageFileType != "pdf" || $imageFileType != "doc" || $imageFileType != "docx"
            || $imageFileType != "gif"
        ) {
            $imageFileType = $imageFileType;
        } else {
            die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
            $uploadOk = 0;
        }

        // echo $_FILES['qualification']['name'][$key] . "<br />";
        if (move_uploaded_file($_FILES['qualification']['tmp_name'][$i], $file_path)) {
            // echo "The file " . htmlspecialchars(basename($file["name"])) . " has been uploaded.";
            echo $file_path;
        } else {
            // die("Sorry, there was an error uploading your file.");
        }
    }
    return serialize($qualifications);
}

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length / strlen($x)))), 1, $length);
}
