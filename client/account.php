<?php
include('../admin/conn.php');
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$error_message = '';

if (isset($_POST['submit'])) {
    $newEmail = mysqli_real_escape_string($con, $_POST['new_email']);
    $newPassword = mysqli_real_escape_string($con, $_POST['new_password']);

    // Check if the user is logged in
    if (isset($_SESSION['id'])) {
        $userId = $_SESSION['id'];

        // Update email and password in the database
        $updateQuery = "UPDATE clientlogin SET email='$newEmail', password='" . password_hash($newPassword, PASSWORD_DEFAULT) . "' WHERE id='$userId'";
        $updateResult = mysqli_query($con, $updateQuery);

        if ($updateResult) {
            $successMessage = "Profile updated successfully.";
        } else {
            $error_message = "Update error: " . mysqli_error($con);
        }
    } else {
        $error_message = "User not logged in.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="4Corners Therapy Center, https://www.facebook.com/4ctcvillamor">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <title>4Corners Therapy Center</title>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include "header.php"; ?>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/revampimg/4c-view-out.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp" style="padding-top: 20px;">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Profile</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Edit Profile</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Edit Profile</h1>
      <?php
      if (!empty($error_message)) {
          echo '<p class="error-message" style="margin-top: 10px; color: red; text-align: center;">' . $error_message . '</p>';
      } elseif (isset($successMessage)) {
          echo '<p class="success" style="margin-top: 10px; color: green; text-align: center;">' . $successMessage . '</p>';
      }
      ?>
      <form method="post" action="" style="background-color: rgba(255, 255, 255, 0.9); max-width: 500px; margin: 0 auto; padding: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
        <label style="display: block; margin-bottom: 5px; color: #555;">New Email:</label>
        <input type="email" name="new_email" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; transition: border-color 0.3s;">
        <label style="display: block; margin-bottom: 5px; color: #555;">New Password:</label>
        <input type="password" name="new_password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 3px; transition: border-color 0.3s;">
        <input type="submit" name="submit" value="Update Profile" style="background-color: #00D9A5; color: white; border: none; padding: 10px 15px; border-radius: 3px; cursor: pointer; transition: background-color 0.3s;">
      </form>
    </div> <!-- .container -->
  </div> <!-- .page-section -->

  <?php include "footer.php"; ?>

  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
  
</body>
</html>