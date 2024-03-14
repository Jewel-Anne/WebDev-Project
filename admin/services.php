<?php

include 'conn.php';
include 'auth.php';

$a=4;
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <?php include"title.php"; ?>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>

  /* The Modal (background) */
  .modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1; /* Sit on top */
    overflow-y: auto;
    overflow-x: hidden;
    margin-top: 60px;    
    width: 100%;
    max-height: calc(100vh - 60px);
  }

  /* Modal Content */
  .modal-content {
    bottom: 0;
    background-color: #fefefe;
    width: 100%;
    -webkit-animation-name: slideIn;
    -webkit-animation-duration: 0.4s;
    animation-name: slideIn;
    animation-duration: 0.4s;
  }

  .box{
    margin: 20px 0 12px 0;
    width: 100%;
  }

  /* The Close Button */
  .close {
    color: white;
    float: right;
    font-size: 28px;
    font-weight: bold;
  }

  .close:hover,
  .close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
  }

  .modal-header {
    background-color: #88B06A;
    color: white;
  }

  .modal-footer {
    background-color: #88B06A;
    color: white;
    margin-right: -16px;
    margin-bottom: -20px;
  }

  /* Add Animation */
  @-webkit-keyframes slideIn {
    from {bottom: -300px; opacity: 0} 
    to {bottom: 0; opacity: 1}
  }

  @keyframes slideIn {
    from {bottom: -300px; opacity: 0}
    to {bottom: 0; opacity: 1}
  }

  @-webkit-keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }

  @keyframes fadeIn {
    from {opacity: 0} 
    to {opacity: 1}
  }
  </style>
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <?php include"topbar.php"; ?>
    <!-- /.navbar -->
      <?php
      // Check if 'edit' key exists in $_GET array
      $edit = isset($_GET['edit']) ? $_GET['edit'] : '';
      if ($edit !== '') {
          $resultt = mysqli_query($con, "SELECT * FROM services WHERE id=" . $edit);
          $roww = mysqli_fetch_array($resultt);
      }

      if(isset($_POST['publise'])){
        $title = $_POST['title'];
        $short = $_POST['short'];
            
        if($edit==''){
      
        $insertdata = mysqli_query($con,"INSERT INTO services(title,short)VALUES('$title','$short')");
        echo "<script>alert('Posted Successfully');</script>
          <script>window.location.href = 'services.php'</script>";
        }
        }
      ?>

      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <div class="modal-header">
            <span class="close">&times;</span>
            <h4>Add New Services</h4>
          </div>
          <div class="modal-body">
            
            <!-- Main content -->
            <section class="content" style="margin-left: 20%">
              <div class="row">
                <div class="col-md-8">
                  <form action="services.php" method="POST" enctype="multipart/form-data">
                    <div class="box">
                      <span class="details">Enter Title:</span><br>
                      <input name="title" value="<?php echo isset($roww['title']) ? $roww['title'] : ''; ?>" type="text" class="form-control" placeholder="Enter Title" required>
                    </div>    
                    <div class="box">
                      <span class="details">Short Description</span><br>
                      <textarea name="short" placeholder="Short Description" style="width: 100%;" rows="5" cols="23"><?php echo isset($roww['short']) ? $roww['short'] : ''; ?></textarea>
                    </div>
                    <div class="box">    
                      <span class="details">Full Description</span>
                      <textarea name="descrip" placeholder="Full Description" style="width: 100%;" rows="5" cols="23"><?php echo isset($roww['descrip']) ? $roww['descrip'] : ''; ?></textarea>
                    </div>
                    <div class="card-header">
                      <div class="form-group">
                        <div class="row">
                          <div class="col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                              <button type="submit" name="publise" class="btn btn-block btn-warning btn-lg">Post</button>
                            </div>
                          </div>
                        </div>
                      </div>
                  </form>
                </div>
              </div>
            </section>
          </div> 
        </div> 
      </div> 

          
    <!-- Main Sidebar Container -->
    <?php include"sidebar.php"; ?>
    <?php
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id']; // Store the delete_id in a variable
        $query_delete = "DELETE FROM services WHERE id='" . mysqli_real_escape_string($con, $delete_id) . "'";
        $p = mysqli_query($con, $query_delete);
        if ($p) {
            echo "<script>alert('Deleted Successfully');</script>";
        } else {
            echo "<script>alert('Failed to Delete');</script>";
        }
        echo "<script>window.location.href = 'services.php'</script>";
    }

    $limit = 10;
    if (isset($_GET["page"])) {
        $page = $_GET["page"];
    } else {
        $page = 1;
    };
    $serial = ($page - 1) * $limit;

    $resultt = mysqli_query($con, "SELECT * FROM services ORDER BY id DESC LIMIT $serial, $limit");
    ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>All Services</h1>
          </div>
          <div class="col-sm-6" style="text-align:right;">
            <a class="btn btn-primary" id="modal_button">
            <i class="fa fa-plus" aria-hidden="true"></i> Add New</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">View</h3>
                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>Service</th>
					          <th>Description</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php  
                    while ($roww = mysqli_fetch_array($resultt)) { 	
                  ?> 
                    <tr>
                      <td><?php echo $roww['title']; ?></td>
                      <td><?php $dec = $roww['short'];
                      $removetag = strip_tags($dec);
                      $trim = $string = substr($removetag,0,600);
                      echo $trim ; ?></td>
                        <td class="text-right py-0 align-middle">
                          <div class="btn-group btn-group-sm">
                            <a href="services.php?delete_id=<?php echo $roww["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                          </div>
                        </td>
                    </tr>
                  <?php 
                    $serial++;
                    } 
                  ?>
                </tbody>
              </table>
            </div>
            <?php                    
            $result_db = mysqli_query($con,"SELECT COUNT(id) FROM services");
            
            $row_db = mysqli_fetch_row($result_db);  
            $total_records = $row_db[0];  
            $total_pages = ceil($total_records / $limit); 
            /* echo  $total_pages; */
            $pagLink = "<ul class='pagination' style='margin-left: 20px'>";  
            for ($i=1; $i<=$total_pages; $i++) {
                    $pagLink .= "<li class='page-item'><a class='page-link' href='services.php?page=".$i."'>".$i."</a></li>";	
            }
            echo $pagLink . "</ul>";  
            ?>
          </div>
        </div>
      </div>
    </section>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote()
  })

      // Get the modal
      var modal = document.getElementById("myModal");

      // Get the button that opens the modal
      var btn = document.getElementById("modal_button");

      // Get the <span> element that closes the modal
      var span = document.getElementsByClassName("close")[0];

      // When the user clicks the button, open the modal 
      modal_button.onclick = function() {
        modal.style.display = "block";
      }

      // When the user clicks on <span> (x), close the modal
      span.onclick = function() {
        modal.style.display = "none";
      }

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
        if (event.target == modal) {
          modal.style.display = "none";
        }
      }
</script>
</body>
</html>
