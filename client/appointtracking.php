<?php
include('../admin/conn.php');

session_start();

$a=1;

// Assuming you have already established a connection to the database
$con = mysqli_connect($host, $user, $password, $dbname);
$query = "SELECT name, phone_number, email, date, time, message FROM appointment";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
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
  <div class="page-section">
    <div class="container">
    <h1 class="text-center mb-5 wow fadeInUp">Your Appointments</h1>

    <!-- Main content -->
    <section class="content">
      <div class="row" style="margin-left: 7.5px">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title"> Appointment List</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive ps">
              <table class="table table-hover w-auto tablesorter" id="">
                <thead class="text-primary">
                  <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Message</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  while ($row = mysqli_fetch_array($result)) {
                      list($name, $phone_number, $email, $date, $time, $message) = $row;
                  ?>   
                  <tr>
                      <td><?php echo $name; ?></td>
                      <td><?php echo $phone_number; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $date; ?></td>
                      <td><?php echo $time; ?></td>
                      <td><?php echo $message; ?></td>
                  </tr>               
                  <?php
                  }
                  ?> 
                </tbody>
              </table>
              <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;">
                </div>
              </div>
              <div class="ps__rail-y" style="top: 0px; right: 0px;">
                <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;">
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
    </section>
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
