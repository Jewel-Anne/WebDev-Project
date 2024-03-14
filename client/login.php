<?php
include('../admin/conn.php');
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

$error_message = ''; // Initialize an empty variable to store the error message

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    // Fetch the hashed password from the database for the provided email
    $check = mysqli_query($con, "SELECT * FROM clientlogin WHERE email='$email'");
    if ($check) {
        $check_fetch = mysqli_fetch_array($check);
        if ($check_fetch) {
            // Verify the provided password with the hashed password from the database
            if (password_verify($password, $check_fetch['password'])) {
                $_SESSION['id'] = $check_fetch['id'];
                header('location: index.php');
                exit;
            } else {
                $error_message = "Invalid email or password.";
            }
        } else {
            $error_message = "Invalid email or password.";
        }
    } else {
        // Display the query error message
        $error_message = "Query error: " . mysqli_error($con);
    }
}
?>


<!DOCTYPE html>
<html lang="en">
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
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Login</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Login</h1>

      <form class="main-form" method="post" action="">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary mt-3 wow zoomIn">Login</button>
      </form>
      
      <!-- Custom error message section -->
      <div class="error-message" style="color: red; font-weight: bold; margin-top: 10px; text-align:center;">
          <?php echo $error_message; ?>
      </div>

      <div class="text-center mt-4">
        <p>Don't have an account? <a href="register.php">Register</a></p>
      </div>
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