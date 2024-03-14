<!-- Footer -->
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  include('../admin/conn.php');
?>

<?php
    // Assuming you have already established a connection to the database
    $con = mysqli_connect($host, $user, $password, $dbname);
    $query = "SELECT site_name,phone,email,address,facebook,instagram,gmail,map FROM settings";
    $result = mysqli_query($con, $query);
  ?>

<footer class="page-footer">
<?php $row=mysqli_fetch_array($result)?>
  <div class="container">
    <div class="row px-md-3">
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Company</h5>
        <ul class="footer-menu">
          <li><a href="#about-us">About Us</a></li>
          <li><a href="services.php">Services</a></li>
          <li><a href="staff.php">Staff Profile</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>More</h5>
        <ul class="footer-menu">
          <li><a href="testimonials.php">Testimonials</a></li>
          <li><a href="more.php">Resources</a></li>
          <li><a href="<?php echo $row['map']; ?>" target="_blank">Get Directions</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-lg-3 py-3">
        <h5>Contact</h5>
        <p class="footer-link mt-2"><?php echo $row['address']; ?></p>
        <a href="#" class="footer-link"><?php echo $row['phone']; ?></a>
        <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1594805612%3A1690396408027391&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%26ogbl%2F&emr=1&ifkv=AeDOFXhzaHG46dNutapQdKvZhVmIRwXsuGljS8wmTBVTN6_xfXVFGxPaRoWHV3pffk-pAq86LPjm&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank" class="footer-link"><?php echo $row['email']; ?></a>
        <h5 class="mt-3">Social Media</h5>
        <div class="footer-sosmed mt-3">
          <a href="<?php echo $row['facebook']; ?>" target="_blank"><span class="mai-logo-facebook-f"></span></a>
          <a href="<?php echo $row['instagram']; ?>" target="_blank"><span class="mai-logo-google-plus-g"></span></a>            
          <a href="<?php echo $row['gmail']; ?>" target="_blank"><span class="mai-logo-instagram"></span></a>
        </div>
      </div>
    </div>
    <hr>
    <p id="copyright">Copyright &copy; 2023 <a href="https://www.facebook.com/4ctcvillamor" target="_blank"><?php echo $row['site_name']; ?></a>. All rights reserved.</p>
  </div>
</footer>