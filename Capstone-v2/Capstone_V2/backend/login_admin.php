<?php
session_start();
include("../config/config.php");

// Check if the database connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Use prepared statements to prevent SQL injection
    $query = "SELECT * FROM admin WHERE name = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            $_SESSION["id"] = $row["id"];
            $_SESSION["name"] = $row["name"];

            // Log date and time to a file
            $logFilePath = "../logtxt/login_log.txt";
            $logMessage = "User: " . $row["name"] . " logged in at " . date("Y-m-d H:i:s") . PHP_EOL;

            // Open the file in append mode and write the log message
            file_put_contents($logFilePath, $logMessage, FILE_APPEND);

            // Redirect and exit to prevent further execution
            header("Location: ../admin_main/dashboard.php?success=Welcome Admin!!");
            exit();
        } else {
            // Incorrect password
            header("Location: ../admin_main/login_admin.php?error=Wrong password!");
            exit();
        }
    } else {
        // No user found with the provided username
        header("Location: ../admin_main/login_admin.php?error=User not found!");
        exit();
    }
}

$conn->close();
?>
