<?php
include 'conn.php';
include 'auth.php';

$a=1;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
  <?php include"title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
   <?php include"topbar.php"; ?>
   
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include"sidebar.php"; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
      // Assuming you have already established a connection to the database
      $con = mysqli_connect($host, $user, $password, $dbname);
      $query = "SELECT ID, name, phone_number, email, date, time, message FROM appointment";
      $result = mysqli_query($con, $query);

      $queryy = "SELECT FullName, BirthDate, Age, Diagnosis, ParentGuardianName, RelationshipToPatient, PhoneNum, MessengerName, Email, ViberNum, Address, ServiceType, PreferredSchedule FROM registration";
      $resultt = mysqli_query($con, $queryy);
      ?>

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
                    <th>ID</th>
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
                      list($ID, $name, $phone_number, $email, $date, $time, $message) = $row;
                  ?>   
                  <tr>
                      <td><?php echo $ID; ?></td>
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
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title"> Registration Form List</h4>
          </div>
          <div class="card-body">
            <div class="table-responsive ps">
              <table class="table table-hover w-auto tablesorter" id="">
                <thead class="text-primary">
                  <tr><th>Full Name</th><th>Birth Date</th><th>Age</th><th>Diagnosis</th><th>Parent Guardian</th><th>Relationship To Patient</th><th>Phone Number</th><th>Messenger Name</th><th>Email</th><th>Viber Number</th><th>Address</th><th>Type of Service</th><th>Preferred Schedule</th></tr>
                </thead>
                <tbody>
                  <?php
                  while ($roww = mysqli_fetch_array($resultt)) {
                      list($patientName, $birthdate, $age, $diagnosis, $parentGuardianName, $relationshipToPatient, $phone, $messengerName, $email, $viberNum, $address, $serviceType, $preferredSchedule) = $roww;
                  ?>   
                  <tr>
                      <td><?php echo $patientName; ?></td>
                      <td><?php echo $birthdate; ?></td>
                      <td><?php echo $age; ?></td>
                      <td><?php echo $diagnosis; ?></td>
                      <td><?php echo $parentGuardianName; ?></td>
                      <td><?php echo $relationshipToPatient; ?></td>
                      <td><?php echo $phone; ?></td>
                      <td><?php echo $messengerName; ?></td>
                      <td><?php echo $email; ?></td>
                      <td><?php echo $viberNum; ?></td>
                      <td><?php echo $address; ?></td>
                      <td><?php echo $serviceType; ?></td>
                      <td><?php echo $preferredSchedule; ?></td>
                  </tr>               
                  <?php
                  }
                  ?> 
                </tbody>
              </table>
              <?php
              // To close the database connection when done
              mysqli_close($con);
              ?>
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   <?php include"footer.php"; ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
