<?php
include("../config/config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $petName = $_POST['petName'];
    $petAge = $_POST['petAge'];
    $petSpecies = $_POST['petSpecies'];
    $petBreed = $_POST['petBreed'];
    $petColor = $_POST['petColor'];
    $distinctiveFeatures = $_POST['distinctiveFeatures'];
    $medicalHistory = $_POST['medicalHistory'];
    $petDescription = $_POST['petDescription'];
    $location = $_POST['location'];
    $petImages = [];

    // Handle file upload
    if (isset($_FILES['petImages'])) {
        $files = $_FILES['petImages'];
        $numFiles = count($files['name']);
        if ($numFiles > 4) {
            echo "You can upload a maximum of 4 images.";
            exit;
        }

        $targetDir = "../uploads/"; // Ensure this directory exists
        for ($i = 0; $i < $numFiles; $i++) {
            if ($files['error'][$i] == 0) {
                $targetFilePath = $targetDir . basename($files['name'][$i]);
                if (move_uploaded_file($files['tmp_name'][$i], $targetFilePath)) {
                    $petImages[] = $targetFilePath;
                }
            }
        }
    }

    // Convert the images array to a JSON string for storage
    $petImagesJson = json_encode($petImages);

    // Ensure the pet_images column exists in the table
    $sqlCheckColumn = "SHOW COLUMNS FROM pet_list LIKE 'pet_images'";
    $resultCheckColumn = $conn->query($sqlCheckColumn);
    if ($resultCheckColumn->num_rows == 0) {
        $conn->query("ALTER TABLE pet_list ADD COLUMN pet_images TEXT");
    }

    $sql = "INSERT INTO pet_list (pet_name, pet_age, pet_species, pet_breed, pet_color, distinctive, medical_history, pet_description, location, pet_images)
            VALUES ('$petName', '$petAge', '$petSpecies', '$petBreed', '$petColor', '$distinctiveFeatures', '$medicalHistory', '$petDescription', '$location, '$petImagesJson')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../admin_facilitator/pet_list.php?success=Done submitting the form!");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
