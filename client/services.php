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
  <style>
    /* Add hover effects for the rectangles */
    .card-service {
      position: relative;
      transition: transform 0.3s;
    }
    .card-service:hover > .content {
      transform: scale(1.1); /* Adjust the scale factor to control the hover effect */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    /* Optional: Style the text inside the rectangles on hover */
    .card-service:hover p {
        font-weight: bold;
        color: #333;
    }
    /* content style */
    .content {
      padding: 0px 0px; 
      text-align: left;
      font-size: 15px;
      transform: translateY(-450px); /*-450*/
      opacity: 0;
      transition: 0.3s;
    }
    .card:hover > .content {
      opacity: 1;
      transform: translateY(15px);
    }  
    .card {
      position: relative;
      width: 300px;
      height: 200px;
      border-radius: 10px;
      box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.5);
      transition: 0.3s;
      padding: 20px 50px;
      background: #fff;
      cursor: pointer;
      margin-right: 30px;
    }
    .card:hover {
      height: 450px;
    }
  </style>
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
            <li class="breadcrumb-item active" aria-current="page">Services</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Services Offered</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <!------------------- SERVICES OFFERED PARAGRAPH -------------------->
  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 wow fadeInUp">
          <h1 class="text-center mb-3">Our Services</h1>
          <div class="text-lg" style="text-align: justify;">
            <p>Welcome to 4Corners Therapy Center, where we are dedicated to providing top-quality services for individuals with special needs. Our center specializes in comprehensive evaluations, assessments, and personalized treatment plans for both children and adults. 
              At 4Corners, we take pride in offering a range of specialized services, including developmental pediatrics, speech therapy, physical therapy, and occupational therapy.</p>
            <p>Our team of highly skilled and compassionate professionals are committed to creating a nurturing and supportive environment, ensuring that each individual's unique needs are met with the utmost care and attention. With a focus on fostering growth, independence, and enhancing overall quality of life, we strive to empower our clients to reach their full potential. 
              At 4Corners, we believe in the power of progress and are dedicated to making a positive impact on the lives of those we serve.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!------------------- 4 RECTANGLES -------------------->
  <div class="page-section bg-light">
    <div class="container d-flex justify-content-center">
      <?php
      // Assuming you have already established a connection to the database
      $con = mysqli_connect($host, $user, $password, $dbname);
      $query = "SELECT title, short FROM services";
      $result = mysqli_query($con, $query);
      while ($row = mysqli_fetch_array($result)) {
      ?>
        <div class="d-inline-block py-3 wow zoomIn mx-3">
          <div class="card">
            <div class="card-service">
              <div class="circle-shape bg-secondary text-white"></div>
              <p><?php echo $row['title']; ?></p>
            </div>
            <div class="content">
              <p><?php echo $row['short']; ?></p>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
  </div>
  <?php include "footer.php"; ?>
  <script src="../assets/js/jquery-3.5.1.min.js"></script>
  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="../assets/vendor/wow/wow.min.js"></script>
  <script src="../assets/js/theme.js"></script>
</body>
</html>