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

  <<div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/revampimg/4c-view-out.png);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Appointment</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">Set Up Appointment</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <?php
    $con = mysqli_connect($host, $user, $password, $dbname);
    $query = "SELECT ID, name, phone_number, email, date, time, message FROM appointment";
    $result = mysqli_query($con, $query);

      // Check if 'edit' key exists in $_GET array
      $edit = isset($_GET['edit']) ? $_GET['edit'] : '';
      if ($edit !== '') {
          $resultt = mysqli_query($con, "SELECT * FROM appointment WHERE id=" . $edit);
          $roww = mysqli_fetch_array($resultt);
      }

      if(isset($_POST['publise'])){
        $name = $_POST['name'];
        $phone_number = $_POST['phone_number'];
        $email = $_POST['email'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $message = $_POST['message'];
            
        if($edit==''){
      
        $insertdata = mysqli_query($con,"INSERT INTO appointment(name, phone_number, email, date, time, message)VALUES('$name', '$phone_number', '$email', '$date', '$time', '$message')");
        echo "<script>alert('Appointment Successful');</script>
          <script>window.location.href = 'appointment.php'</script>";
        }
        }
      ?>
  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>
      <form class="main-form" action="appointment.php" method="POST" enctype="multipart/form-data">
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input name="name" value="<?php echo isset($roww['name']) ? $roww['name'] : ''; ?>" type="text" class="form-control" placeholder="Full Name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input name="email" value="<?php echo isset($roww['email']) ? $roww['email'] : ''; ?>" type="text" class="form-control" placeholder="Email Address" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft" data-wow-delay="300ms">
            <input name="date" value="<?php echo isset($roww['date']) ? $roww['date'] : ''; ?>" type="date" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <input name="time" value="<?php echo isset($roww['time']) ? $roww['time'] : ''; ?>" type="time" id="departement" class="custom-select" min="09:00" max="18:00" required>
          </div>

          <!-- 
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="departement" id="departement" class="custom-select">
              <option value="general">General Health</option>
              <option value="cardiology">Cardiology</option>
              <option value="dental">Dental</option>
              <option value="neurology">Neurology</option>
              <option value="orthopaedics">Orthopaedics</option>
            </select>
          </div>-->

          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input name="phone_number" value="<?php echo isset($roww['phone_number']) ? $roww['phone_number'] : ''; ?>" type="text" class="form-control" placeholder="Contact Number" required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" value="<?php echo isset($roww['message']) ? $roww['message'] : ''; ?>" id="message" class="form-control" rows="6" placeholder="Enter Message"></textarea>
          </div>
        </div>
        <button type="submit" name="publise" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
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