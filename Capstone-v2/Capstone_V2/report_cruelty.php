<?php
include("header.php");
include("config/config.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--=============== ICON PAGE ===============-->
  <link rel="icon" type="image" href="img/LG-YELLOW.png" width=25px height=25px>
  <!--=============== REMIXICONS ===============-->
  <link rel="stylesheet" href="css/remixicons.css" media="screen">
  <!----===== Boxicons CSS ===== -->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <!----===== Fa Icons CSS ===== -->
  <link rel="stylesheet" href="css/icons.css" media="screen">
  <!--=============== CSS ===============-->
  <link rel="stylesheet" href="css/styles.css" media="screen">
  <title>Report Cruelty • FurFect Match</title>
</head>
<>
  <?php include("header.php"); ?>


  <div class="cruelty-container">
    <h2>ANIMAL CRUELTY REPORT</h2>
    <br>
    <div class="form-section active" id="step1">
      <p>Are you reporting that an animal is in imminent danger? Do you know specifically where to find this animal, and is the abuse or danger taking place right now? If so, please call your local police department. If the police are unresponsive, please call City Veterinary Office immediately at (043) 784 8022.</p>
      <br>
      <p>For all other reports of cruelty to animals, click "Yes" below. Your e-mail message will be routed to the appropriate City Veterinary Office department immediately. Please fill out the form completely.</p>
      <br>
      <p>Your cooperation saves City Veterinary Office time and resources. Thank you.</p>
      <br>
      <h3>If you have seen a website that depicts animal abuse, you can learn about actions that you can take or report the site to City Veterinary Office by filling out this form.</h3>
      <p class="required-fields">Fields with an asterisk (*) are required.</p>
      <br>

      <form action="report_cruelty.php" method="POST">
        <div class="form-group">
          <label for="first-name">The issue I'm reporting involves: <span class="required">*</span></label>
          <label for="first-name">Domestic or farmed animals or wildlife <span></span></span></label>
        </div>

        <div class="form-container">
          <div class="form-group">
            <label for="first_name">First Name <span class="required">*</span></label>
            <input type="text" id="first_name" name="first_name" required>
          </div>
          <div class="form-group">
            <label for="last_name">Last Name <span class="required">*</span></label>
            <input type="text" id="last_name" name="last_name" required>
          </div>
          <div class="form-group">
            <label for="address">Address <span class="required">*</span></label>
            <input type="text" id="address" name="address" required>
          </div>
          <div class="form-group">
            <label for="email">E-mail <span class="required">*</span></label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="animal_location">Address Where Animal is Located <span class="required">*</span></label>
            <input type="text" id="animal_location" name="animal_location" required>
          </div>
          <div class="form-group">
            <label for="subject">Subject Line of E-mail</label>
            <input type="text" id="subject" name="subject">
          </div>
          <div class="form-group">
            <label for="describe">Please describe your concern, including the names and contact information of the individuals and agencies involved, dates and times,
              the exact location of the incident, and what has been done thus far: <span class="required">*</span></label>
            <textarea id="describe" name="describe" required style="height: 120px;"></textarea>
          </div>
          <div class="form-group">
            <label>Photos help us help animals. If you have any photos of the animals in question, please attach them</label>
            <br>
            <div class="file-upload">
              <label for="photo1">Photo #1</label>
              <input type="file" id="photo1" name="photo1" accept="image/*">
              <span>Max. file size: 100 MB.</span>
            </div>
            <br>
            <div class="file-upload">
              <label for="photo2">Photo #2</label>
              <input type="file" id="photo2" name="photo2" accept="image/*">
              <span>Max. file size: 100 MB.</span>
            </div>
            <br>
            <div class="file-upload">
              <label for="photo3">Photo #3</label>
              <input type="file" id="photo3" name="photo3" accept="image/*">
              <span>Max. file size: 100 MB.</span>
            </div>
          </div>
          <div class="form-group">
            <label for="subject"></label>
          </div>
          <div class="form-group">
            <label for="subject"></label>
          </div>
          <div class="form-group" style="display: none;">
              <label for="catego"></label>
              <input type="hidden" id="catego" name="catego" value="Animal Cruelty" required>
            </div>
          <div class="form-buttons">
            <button type="button" class="cancel-button">Cancel</button>
            <button type="button" class="next-button">Submit</button>
          </div>
      </form>
    </div>
   </div>
  </div>


  <?php include("footer.php"); ?>

  </body>
</html>