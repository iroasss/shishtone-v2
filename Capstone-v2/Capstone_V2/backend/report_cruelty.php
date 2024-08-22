<?php
session_start();
include("../config/config.php");

if(isset($_POST['submit'])){
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $address = $_POST['address'];
  $email = $_POST['email'];
  $animal_location = $_POST['animal_location'];
  $subject = $_POST['subject'];
  $describe = $_POST['describe'];
  $breed = $_POST['breed'];
  $lostfound = $_POST['lostfound'];
  $descrip  = $_POST['descrip'];
  $photo1 = $_POST['photo1'];
  $photo2 = $_POST['photo2'];
  $photo3 = $_POST['photo3'];

  // File upload code
  if(isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $image = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_folder = '../report_pet_images/'.$image;

    // Check if file already exists
    if(file_exists($image_folder)) {
      header("Location: ../User/allfile.php?error=File already exists!");
      exit();
    }

    // Move uploaded file to destination folder
    move_uploaded_file($image_tmp_name, $image_folder);
  } else {
    // Handle the case where no image is uploaded
    $image = '';  // Set a default value if no image is uploaded
  }

  $query = "INSERT INTO files (first_name, last_name, address, email, animal_location, subject, describe, breed, lostfound, descrip, tfile, payment, image, contact, datetime) VALUES ('$first_name','$last_name','$address','$email','$animal_location','$subject','$describe','$breed','$lostfound','$descrip', '$tfile', '$payment', '$image', '$contact', NOW())";

  if($conn->query($query) === TRUE){
    header("Location: report_cruelty.php?success=Done submitting the form!");
  } else {
    header("Location: report_cruelty.php?error=Your Form is Not Complete!");
  }
  $conn->close();
}
?>