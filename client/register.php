<?php
// Debugging: Check for database connection errors
include('../admin/conn.php');
if (!$con) {
    die("Database connection error: " . mysqli_connect_error());
}
session_start();

// Initialize error variables for login and sign-up
$error_message = '';
$error_message_signup = '';
$registration_successful = false; // New variable to indicate successful registration

// Check if the form has been submitted for registration
if (isset($_POST['register'])) { // Changed from 'submit' to 'register'
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($con, $_POST['confirm_password']);

    // Perform password validation (optional)
    if ($password !== $confirm_password) {
        $error_message_signup = "Passwords do not match. Please try again.";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert user into the database
        $insert_query = "INSERT INTO clientlogin (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        if (mysqli_query($con, $insert_query)) {
            // Successful registration
            $_SESSION['id'] = mysqli_insert_id($con);
            $registration_successful = true; // Set the registration success flag
        } else {
            // Failed to insert user
            $error_message_signup = "Registration failed. Please try again later.";
        }
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

    <script>
      // JavaScript to show a pop-up message for successful registration
      <?php if ($registration_successful): ?>
          window.onload = function() {
              alert("Registration successful! You can now login with your credentials.");
          };
      <?php endif; ?>
    </script>

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
            <li class="breadcrumb-item active" aria-current="page">Register</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Create an account</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Register</h1>

      <form class="main-form" method="post" action="">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" class="form-control" name="name" placeholder="Full Name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" required>
          </div>
        </div>

        <button type="submit" name="register" class="btn btn-primary mt-3 wow zoomIn">Register</button>
      </form>

      <div class="text-center mt-4">
        <p>Already have an account? <a href="login.php">Login</a></p>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->
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