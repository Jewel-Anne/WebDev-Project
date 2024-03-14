<?php
include('../admin/conn.php');
session_start();

$res=mysqli_query($con,"select * from facebook_page_post order by id asc");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
  <meta name="copyright" content="4Corners Therapy Center, https://www.facebook.com/4ctcvillamor">
  <link rel="stylesheet" href="../assets/css/maicons.css">
  <link rel="stylesheet" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="../assets/css/theme.css">
  <link rel="stylesheet" href="../assets/css/cookie-consent.css">
  <title>4Corners Therapy Center</title>
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <?php include "header.php"; ?>

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/revampimg/4c-view-out.png);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Maximize their potential, one step at a time.</span>
        <h1 class="display-4">Join with us!</h1>
        <a href="registernow.php" target="_blank" class="btn btn-primary">Get Started</a>
      </div>
    </div>
  </div>

<!--------------------------- CENTER DESCRIPTION ------------------------------->
    <div class="page-section pb-0" id="about-us">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>Welcome to 4Corners <br> Therapy Center</h1>
            <p class="text-grey mb-4"  style="text-align: justify;">We specialize in evaluating, assessing, and treating children and adults with special needs. 
              We employ a team of specialized therapists who collaborate to develop individualized treatment plans based on the unique needs of each our client. 
              Our therapists work closely with adults, children, and their families to set goals, track progress, and provide ongoing support. 
              The center also offers a child-friendly environment with specialized equipment and resources to create a comfortable and engaging space for therapy sessions.</p>
            <a href="services.php" class="btn btn-primary">Learn More</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/logo.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


<!--------------------------- OUR DOCTORS ------------------------------->
  <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Doctors</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="../assets/img/revampimg/doc-amon.jpg" alt="Dr. Theresa Amon">
              <div class="meta">
                <a href="https://www.instagram.com/theresaamon/?hl=en" target="_blank"><span class="mai-logo-instagram"></span></a>
                <a href="https://www.linkedin.com/in/theresa-amon-a68179179/" target="_blank"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Theresa Amon</p>
              <span class="text-sm text-grey">Occupational Therapist</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
               <!--CHANGE IMAGE-->
              <img src="../assets/img/doctors/doctor_2.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Jerry Gervacio</p>
              <span class="text-sm text-grey">Physical Therapist</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <!--CHANGE IMAGE-->
              <img src="../assets/img/doctors/doctor_3.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Joan Zarano</p>
              <span class="text-sm text-grey">Speech Therapist</span>
            </div>
          </div>
        </div>
        <div class="item">
          <div class="card-doctor">
            <div class="header">
               <!--CHANGE IMAGE-->
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
        <div class="item">
          <div class="card-doctor">
            <div class="header">
               <!--CHANGE IMAGE-->
              <img src="../assets/img/doctors/doctor_5.jpg" alt="">
              <div class="meta">
                <a href="#"><span class="mai-call"></span></a>
                <a href="#"><span class="mai-logo-whatsapp"></span></a>
              </div>
            </div>
            <div class="body">
              <p class="text-xl mb-0">Dr. Maria Elizabeth Madrano</p>
              <span class="text-sm text-grey">Occupational Therapist</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--------------------------- FACEBOOK UPDATES ------------------------------->
<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">UPDATES</h1>
      <div class="row mt-5">

      <?php while($row=mysqli_fetch_assoc($res)){?>
        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <a href="https://www.facebook.com/people/4Corners-Therapy-Center-Test/100095286135794/" class="post-thumb">
                <img src="<?php echo urlencode($row['full_picture']); ?>" alt="">
              </a>
            </div>
            <div class="body">
              <h5 class="post-title"><a href="https://www.facebook.com/people/4Corners-Therapy-Center-Test/100095286135794/"><?php echo $row['message']?></a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    <img src="<?php echo urlencode($row['page_picture']); ?>" alt="">
                  </div>
                  <span><?php echo $row['page_name']?></span>
                </div>
                <span class="mai-time"></span> <?php echo $row['created_time']?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>

        </div>
    </div>
  </div> <!-- .page-section -->

  <!--------------------------- COOKIES ------------------------------->

  <div class="wrapper">
    <img src="#" alt="">
    <div class="content">
      <header>Cookies Consent</header>
      <p>This website uses cookies to ensure you get the best experience on our website.</p>
      <div class="buttons">
        <button class="item">I understand</button>
        <a href="https://policies.google.com/technologies/cookies?hl=en" target="_blank" class="item">Learn more</a>
      </div>
    </div>
  </div>

<?php include "footer.php"; ?>
<script src="../assets/js/jquery-3.5.1.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="../assets/vendor/wow/wow.min.js"></script>
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/cookie-consent.js"></script>
  
</body>
</html>