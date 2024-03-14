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
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
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
        <h1 class="font-weight-normal">Resources</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <style>
  .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    margin-top: 20px;
    text-align: center;
  }

  .card-wrap {
    position: relative;
    flex: 1 0 calc(33.33% - 20px);
    min-width: 280px;
  }

  .card {
    background-color: #fff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    padding: 20px;
    position: relative;
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
  }

  .icon {
    width: 50px;
    height: 50px;
    display: block;
    margin: 0 auto 20px;
  }

  .title-sm {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
  }

  .text {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 20px;
  }

  .btn.small {
    font-size: 12px;
    padding: 8px 12px;
    border-radius: 4px;
    background-color: #00D9A5;
    color: #fff;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
  }

  .btn.small:hover {
    background-color: #05B4E1;
  }

  /* Centering the Download (PDF) button */
  .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .btn.small {
    margin-top: 20px;
  }
</style>

<div class="page-section bg-light">
  <div class="container">
    <div class="cards">
      <!-- Card 1 -->
      <div class="card-wrap">
        <img src="./img/shapes/points3.png" class="points points1 points-sq" alt=""/>
        <div class="card" data-card="Occupational Therapy">
          <div class="card-content z-index">
            <h3 class="title-sm">Occupational Therapy Guide for Parents</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="card-wrap">
        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
        <div class="card" data-card="Physical Therapy">
          <div class="card-content z-index">
            <h3 class="title-sm">Speech and Language Milestones Chart</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="card-wrap">
        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
        <div class="card" data-card="Physical Therapy">
          <div class="card-content z-index">
            <h3 class="title-sm">Sensory Play <br> Activity Book</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="card-wrap">
        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
        <div class="card" data-card="Physical Therapy">
          <div class="card-content z-index">
            <h3 class="title-sm">Developmental Pedia Assessment Toolkit</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="card-wrap">
        <img src="./img/shapes/points3.png" class="points points2 points-sq" alt="" />
        <div class="card" data-card="Physical Therapy">
          <div class="card-content z-index">
            <h3 class="title-sm">Inclusive Classroom Strategies Handbook</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="card-wrap">
        <!-- Add the shape image -->
        <img src="./img/shapes/points3.png" class="points points3 points-sq" alt="" />
        <div class="card" data-card="Developmental Pedia">
          <div class="card-content z-index">
            <h3 class="title-sm">Fine Motor Skills Development Worksheets</h3>
            <a href="resources.pdf" class="btn small" download>Download (PDF)</a>
          </div>
        </div>
      </div>
    </div>
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