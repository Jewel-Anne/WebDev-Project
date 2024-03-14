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
            <li class="breadcrumb-item active" aria-current="page">More</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Staff Profile</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->
  <div class="page-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="row">        
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/revampimg/doc-amon.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Theresa Amon</p>
                  <span class="text-sm text-grey">Occupational Therapist</span>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_2.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Jerry Gervacio</p>
                  <span class="text-sm text-grey">Physical Theraphist</span>
                </div>
              </div>
            </div>    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_3.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Joan Zarano</p>
                  <span class="text-sm text-grey">Speech Theraphist</span>
                </div>
              </div>
            </div>    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_4.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Christine Fadragon</p>
                  <span class="text-sm text-grey">Developmental Pedia</span>
                </div>
              </div>
            </div>    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_5.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Maria Elizabeth Madrano</p>
                  <span class="text-sm text-grey">Occupational Theraphist</span>
                </div>
              </div>
            </div>    
            <div class="col-md-6 col-lg-4 py-3 wow zoomIn">
              <div class="card-doctor">
                <div class="header">
                  <img src="../assets/img/doctors/doctor_6.jpg" alt="">
                  <div class="meta">
                    <a href="#"><span class="mai-call"></span></a>
                    <a href="#"><span class="mai-logo-whatsapp"></span></a>
                  </div>
                </div>
                <div class="body">
                  <p class="text-xl mb-0">Dr. Sheree <br> Cruz</p>
                  <span class="text-sm text-grey">Occupational Theraphist</span>
                </div>
              </div>
            </div>
          </div>
        </div>
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