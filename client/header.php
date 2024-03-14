<?php
include('../admin/conn.php');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!-- Main Header -->
<header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +63 917 805 5332</a>
              <span class="divider">|</span> 
              <a href="https://accounts.google.com/v3/signin/identifier?dsh=S1594805612%3A1690396408027391&continue=https%3A%2F%2Fmail.google.com%2Fmail%2F%26ogbl%2F&emr=1&ifkv=AeDOFXhzaHG46dNutapQdKvZhVmIRwXsuGljS8wmTBVTN6_xfXVFGxPaRoWHV3pffk-pAq86LPjm&ltmpl=default&ltmplcache=2&osid=1&passive=true&rm=false&scc=1&service=mail&ss=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin" target="_blank"><span class="mai-mail text-primary"></span> 4cornerstherapycenter@gmail.com</a>
            </div>
          </div>
          <div class="col-sm-4 text-right text-sm">
            <div class="social-mini-button">
              <a href="https://www.facebook.com/4ctcvillamor" target="_blank"><span class="mai-logo-facebook-f"></span></a>
              <a href="registernow.php" target="_blank"><span class="mai-logo-dribbble"></span></a>
              <a href="https://instagram.com/4cornerstherapycenter?igshid=NTc4MTIwNjQ2YQ==" target="_blank"><span class="mai-logo-instagram"></span></a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <!-- ... (navbar content) ... -->
            <a class="navbar-brand" href="#"><img src="../assets/img/logo.png" alt="4Corners Therapy Center Logo" width="200" height="60"></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="appointment.php">Appointment</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            More
                        </a>
                        <div class="dropdown-menu" aria-labelledby="moreDropdown">
                            <a class="dropdown-item" href="staff.php">Staff Profile</a>
                            <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                            <a class="dropdown-item" href="more.php">Resources</a>
                        </div>
                    </li>
                    
                    <li class="nav-item">
            <?php
            if (isset($_SESSION['id'])) {
                $userId = $_SESSION['id'];
                $userQuery = mysqli_query($con, "SELECT name FROM clientlogin WHERE id='$userId'");
                
                if ($userQuery) {
                    $userRow = mysqli_fetch_array($userQuery);
                    if ($userRow) {
                        $userName = $userRow['name'];
                        echo '<li class="nav-item dropdown">';
                        echo '<a class="nav-link dropdown-toggle" href="#" id="moreDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' 
                            . $userName . '</a>';
                        echo '<div class="dropdown-menu" aria-labelledby="moreDropdown">';
                        echo '<a class="dropdown-item" href="account.php">Profile</a>';
                        echo '<a class="dropdown-item" href="appointtracking.php">Appointment Tracking</a>';
                        echo '<a class="dropdown-item" href="logout.php">Logout</a>';  // Change the logout link
                        echo '</div>';
                        echo '</li>';
                    }
                }
            } else {
                echo '<li class="nav-item">';
                echo '<a class="btn btn-primary ml-lg-3" href="login.php">Login/Register</a>';
                echo '</li>';
            }
            ?>
        </li>
                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>