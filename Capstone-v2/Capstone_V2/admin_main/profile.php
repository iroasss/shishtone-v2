<?php
include("header.php");
?>

<div class="logout-button-container">
    <button onclick="location.href='../backend/logout_admin.php'" class="logout-button">
        <i class="bx bx-log-out icon"></i>
        <span class="link_name">Logout</span>
    </button>
</div>

<div class="form-container">
    <form>
        <fieldset>
            <legend>Personal Information</legend>
            <div class="form-row">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName">
                <label for="age">Age</label>
                <input type="number" id="age" name="age">
            </div>
            <div class="form-row">
                <label for="sex">Sex</label>
                <input type="text" id="sex" name="sex">
                <label for="birthday">Birthday</label>
                <input type="date" id="birthday" name="birthday">
            </div>
            <div class="form-row">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone">
            </div>
            <div class="form-actions">
                <button type="button" class="cancel-button">Cancel</button>
                <button type="submit" class="save-button">Save Changes</button>
            </div>
        </fieldset>
    </form>
</div>

<?php
include("footer.php");
?>
