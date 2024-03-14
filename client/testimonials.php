<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include('../admin/conn.php');
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="copyright" content="4Corners Therapy Center, https://www.facebook.com/4ctcvillamor">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/teststyle.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            <li class="breadcrumb-item active" aria-current="page">More</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Testimonials</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <?php
    // Assuming you have already established a connection to the database
    $con = mysqli_connect($host, $user, $password, $dbname);
    $query = "SELECT title, designation, descrip FROM testimonials";
    $result = mysqli_query($con, $query);
  ?>
  <div class="wrapper">
  <?php while($row=mysqli_fetch_array($result)){ ?>
    <div class="box">
      <i class="fas fa-quote-left quote"></i>
      <p><?php echo $row['descrip']; ?></p>
      <div class="content">
        <div class="info">
          <div class="name"><?php echo $row['title']; ?></div>
          <div class="job"><?php echo $row['designation']; ?></div>
        </div>
        <div class="image">
          <img src="../assets/img/person/profile-1.jpeg" alt="">
        </div>
      </div>
    </div>
  <?php  } ?>
  </div>           
  <?php include "footer.php"; ?>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>
</html>