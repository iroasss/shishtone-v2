<?php
session_start();
include("config/config.php");

if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $animal_location = $_POST['animal_location'];
    $subject = $_POST['subject'];
    $describe = $_POST['describe'];
    $catego = $_POST['catego'];

    $uploaded_images = [];

    for ($i = 1; $i <= 3; $i++) {
        $file_input = 'photo' . $i;

        if (isset($_FILES[$file_input]) && $_FILES[$file_input]['error'] === UPLOAD_ERR_OK) {
            $image = basename($_FILES[$file_input]['name']);
            $image_tmp_name = $_FILES[$file_input]['tmp_name'];
            $image_folder = '../report_pet_images/' . $image;

            // Check if the file already exists
            if (file_exists($image_folder)) {
                header("Location: ../report_cruelty.php?error=File $image already exists!");
                exit();
            }

            // Move uploaded file
            if (move_uploaded_file($image_tmp_name, $image_folder)) {
                $uploaded_images[] = $image;
            } else {
                header("Location: ../report_cruelty.php?error=File $image could not be uploaded!");
                exit();
            }
        } else {
            $uploaded_images[] = ''; 
        }
    }

    // Convert array of uploaded images to a comma-separated string for storing in the database
    $images_string = implode(',', $uploaded_images);

    $query = "INSERT INTO report (first_name, last_name, address, email, animal_location, subject, describe, catego, image, datetime) 
              VALUES ('$first_name','$last_name','$address','$email','$animal_location','$subject','$describe','$catego','$images_string', NOW())";

    if ($conn->query($query) === TRUE) {
        header("Location: ../report_cruelty.php?success=Done submitting the form!");
    } else {
        header("Location: ../report_cruelty.php?error=Your Form is Not Complete!");
    }

    $conn->close();
}
