

<?php
@include 'config.php';

session_start();
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Confirmation</title>
</head>
<body>

<script>
  var logoutConfirmed = confirm("Are you sure you want to logout?");

  if (logoutConfirmed) {
    window.location.href = '../admin_main/login_admin.php';
  } else {
    // If the user cancels the logout, you can redirect them to another page or perform other actions.
    window.location.href = '../admin_main/profile.php';
  }
</script>

</body>
</html>