<?php
include("header.php");
include("config/config.php");
?>
<!DOCTYPE html>
< lang="en">

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
    <title>Report Lost & Found • FurFect Match</title>
  </head>
  <d>
    <?php include("header.php"); ?>


    <div class="adoption-container">
      <h2>ANIMAL LOST & FOUND REPORT</h2>
      <br>
      <div class="form-section active" id="step1">
        <p class="required-fields">Fields with an asterisk (*) are required.</p>
        <br>


        <form action="submit_application.php" method="POST">
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
              <label for="email">E-mail <span class="required">*</span></label>
              <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="address">Address Found<span class="required">*</span></label>
              <input type="text" id="address" name="address" required>
            </div>
            <div class="form-group">
              <label for="breed">Breed <span class="required">*</span></label>
              <input type="text" id="breed" name="breed" required>
            </div>
            <div class="form-group">
              <label for="subject"></label>
            </div>
            <div class="form-group">
              <label for="lostfound">What are you reporting? <span class="required">*</span></label>
              <div>
                <input type="checkbox" id="lost" name="lostfound" value="Lost Pet">
                <label for="lost">Lost Pet</label>
              </div>
              <div>
                <input type="checkbox" id="found" name="lostfound" value="Found Pet">
                <label for="found">Found Pet</label>
              </div>
            </div>
            <div class="form-group">
              <label for="subject"></label>
            </div>
            <div class="form-group">
              <label for="descrip">Pet Description <span class="required">*</span></label>
              <textarea id="descrip" name="descrip" required style="height: 120px;" onclick="deleteText()">
Please be as detailed as possible, especially if reporting a lost pet.
</textarea>
            </div>
            <div class="form-group">
              <label for="subject"></label>
            </div>
            <div class="form-group">
              <label for="gender">Sex? <span class="required">*</span></label>
              <div>
                <input type="checkbox" id="male" name="gender" value="male">
                <label for="male">Male</label>
              </div>
              <div>
                <input type="checkbox" id="female" name="gender" value="female">
                <label for="female">Female</label>
              </div>
              <div>
                <input type="checkbox" id="unsure" name="gender" value="unsure">
                <label for="unsure">Unsure</label>
              </div>
            </div>
            <div class="form-group" style="display: none;">
              <label for="catego"></label>
              <input type="hidden" id="catego" name="catego" value="Lost & Found" required>
            </div>

            <div class="form-group">
              <label for="subject"></label>
            </div>



            <div class="form-buttons">
              <button type="button" class="cancel-button">Cancel</button>
              <button type="button" class="next-button">Submit</button>
            </div>
        </form>
      </div>
    </div>
    </div>
    <script>
      function deleteText() {
        var textarea = document.getElementById('descrip');
        textarea.value = '';
        // Optionally, you can remove the onclick event after it fires once
        textarea.onclick = null;
      }
    </script>
    <?php include("footer.php"); ?>

    </body>

    </html>