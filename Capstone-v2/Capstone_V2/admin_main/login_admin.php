<?php
$errors = array(); // Initialize $errors as an empty array

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Your form processing logic here, where you validate user input and populate $errors if needed
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- ICON PAGE -->
  <link rel="icon" type="image" href="../img/LG-YELLOW.png" width="25px" height="25px">
  <!-- REMIXICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">
  <!-- FA ICONS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Boxicons CSS -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!-- CSS -->
  <link rel="stylesheet" href="../css/admin.css" media="screen">
  <title>Admin • Sign In</title>
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #E8EDF2;
    }

    .container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      display: flex;
      flex-direction: row;
      align-items: center;
      background-color: white;
      padding: 30px;
      box-shadow: 0 50px 50px -50px darkslategray;
    }

    .myform {
      width: 270px;
      margin-right: 30px;
    }

    .myform h2 {
      color: #1c1c1e;
      margin-bottom: 20px;
    }

    .myform input {
      border: none;
      outline: none;
      width: 100%;
      border-bottom: 2px solid #1c1c1e;
      margin-bottom: 25px;
      padding: 7px 0;
      font-size: 14px;
    }

    .myform button,
    .myform .register-button {
      display: block;
      width: 100%;
      color: white;
      background-color: #1c96c5;
      border: none;
      outline: none;
      border-radius: 2px;
      font-size: 14px;
      padding: 10px 12px;
      font-weight: 500;
      text-align: center;
      margin-top: 10px;
      text-decoration: none;
    }

    .myform .register-button:hover,
    .myform button:hover {
      background-color: #165a7b;
    }

    .inputBx label {
      display: block;
      margin-top: 10px;
      font-weight: var(--font-medium);
      color: var(--title-color);
    }

    .inputBx input,
    .inputBx select {
      width: 100%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid var(--border-color);
      border-radius: 4px;
      background-color: var(--container-color);
      font-size: var(--normal-font-size);
      color: var(--text-color);
      transition: border-color 0.3s ease;
    }

    .inputBx input:focus,
    .inputBx select:focus {
      border-color: var(--first-color);
      outline: none;
    }

    .image img {
      width: 300px;
    }

    .error-msg {
      color: red;
      font-size: 14px;
      margin-bottom: 10px;
      display: block;
    }

    .links p {
      margin-top: 20px;
      text-align: center;
    }

    .links a {
      color: #1c96c5;
      text-decoration: none;
    }

    .links a:hover {
      text-decoration: underline;
    }

    /* Modal styles */
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.4);
      padding-top: 60px;
    }

    .modal-content {
      background-color: #fefefe;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      text-align: center;
    }

    .close {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: black;
      text-decoration: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="myform">
      <form action="../backend/login_admin.php" method="post">
        <h2>ADMIN</h2>
        <div class="form">
          <?php
          if (isset($errors)) {
            foreach ($errors as $error) {
              echo '<span class="error-msg">' . $error . '</span>';
            }
          }
          ?>
          <div class="inputBx">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="inputBx">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <div class="inputBx">
            <button type="submit" name="submit" class="form-btn">Sign In</button>
          </div>
          <div class="links">
            <p>Create an Account <a href="register_admin.php">Sign Up</a></p>
          </div>
        </div>
      </form>
    </div>
    <div class="image">
      <img src="../img/city-seal.jpg" alt="City Seal">
    </div>
  </div>
</body>

</html>
