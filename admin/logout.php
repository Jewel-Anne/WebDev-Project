<?php

session_start();

unset($_SESSION["ad_id"]);

header("Location:signup.php");

?>