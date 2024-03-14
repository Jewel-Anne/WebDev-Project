<?php 

$host = "localhost";

$user = "root";

$password = "";

$dbname = "4corners";


$con = mysqli_connect($host, $user, $password, $dbname);

if($con){
    //echo "successfuly connect";
}
else{
   //echo "Not connect";
}

// Check connection

 ?>