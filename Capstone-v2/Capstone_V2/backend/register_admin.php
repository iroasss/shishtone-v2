<?php
session_start();
include("../config/config.php");

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $role = $_POST['role'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    if ($password !== $repassword) {
        header("Location: ../admin_main/register_admin.php?error=Passwords do not match!");
        exit();
    } else {
        $query = "INSERT INTO admin (name, role, password) VALUES ('$name','$role', '$hash')";

        if ($conn->query($query) === TRUE) {
            header("Location: ../admin_main/login_admin.php?success=Registered successfully");
            exit();
        } else {
            header("Location: ../admin_main/register_admin.php?error=" . $conn->error);
            exit();
        }
    }
}
$conn->close();
?>
