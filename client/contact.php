<?php

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
            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Contact Us</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Get in Touch</h1>
      <h1 class="text-center wow fadeInUp" style="font-size: 20px;">+63 917 805 5332</h1>
      <h1 class="text-center wow fadeInUp" style="font-size: 20px;">4cornerstherapycenter@gmail.com</h1>

      <form class="contact-form mt-5">
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">
            <label for="fullName">Name</label>
            <input type="text" id="fullName" class="form-control" placeholder="Full name">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">
            <label for="emailAddress">Email</label>
            <input type="text" id="emailAddress" class="form-control" placeholder="Email address">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="subject">Subject</label>
            <input type="text" id="subject" class="form-control" placeholder="Enter subject">
          </div>
          <div class="col-12 py-2 wow fadeInUp">
            <label for="message">Message</label>
            <textarea id="message" class="form-control" rows="8" placeholder="Enter Message"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">Send Message</button>
      </form>
    </div>
  </div>

  <div class="maps-container wow fadeInUp">
    <div id="google-maps"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.2887279250112!2d121.0101754759377!3d14.525470285952018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9cbc1bef739%3A0xe6b2ceac3de4e23b!2s4Corners%20Therapy%20Center!5e0!3m2!1sen!2sph!4v1690804484422!5m2!1sen!2sph" width="1865" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
  </div>

  <?php include "footer.php"; ?>

<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/google-maps.js"></script>
<script src="../assets/js/theme.js"></script>
<<<<<<< HEAD
<!--HOW TO CHANGE MAP-->
<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></!--> -->
<script async defer src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3862.2886372284493!2d121.01017547599719!3d14.525475478909778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9cbc1bef739%3A0xe6b2ceac3de4e23b!2s4Corners%20Therapy%20Center!5e0!3m2!1sen!2sph!4v1690792677883!5m2!1sen!2sph" width="1000" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></script>
=======
>>>>>>> bf641c7b94a3f8af27e66e0fc78c63b056c32ead
</body>
</html>