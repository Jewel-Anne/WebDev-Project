<?php
include('conn.php');
session_start();

// Initialize error variables for login and sign-up
$error_message = '';
$error_message_signup = '';
$registration_successful = false;

// Check if the form has been submitted for login
if (isset($_POST['submit'])) {
    $ad_email = mysqli_real_escape_string($con, $_POST['ad_email']);
    $ad_pass = mysqli_real_escape_string($con, $_POST['ad_pass']);
    $check = mysqli_query($con, "SELECT * FROM admin WHERE ad_email='$ad_email'");

    if (mysqli_num_rows($check) > 0) {
        $row = mysqli_fetch_assoc($check);
        if (password_verify($ad_pass, $row['ad_password'])) {
            // Successful login attempt
            $_SESSION['ad_id'] = $row['ad_id'];
            header('Location: index.php');
            exit;
        } else {
            // Incorrect password
            $error_message = "Invalid email or password. Please try again.";
        }
    } else {
        // No user found with the given email
        $error_message = "Invalid email or password. Please try again.";
    }
}

// Check if the form has been submitted for sign-up
if (isset($_POST['signup_submit'])) {
    $ad_name = mysqli_real_escape_string($con, $_POST['ad_name']);
    $ad_email = mysqli_real_escape_string($con, $_POST['ad_email']);
    $ad_password = mysqli_real_escape_string($con, $_POST['ad_password']);
    $ad_repeat_password = mysqli_real_escape_string($con, $_POST['ad_repeat_password']);

    // Perform necessary validation and error handling here

    // Example: Check if passwords match
    if ($ad_password !== $ad_repeat_password) {
        $error_message_signup = "Passwords do not match. Please try again.";
    } else {
        // Perform any other validation as needed

        // Example: Insert the new admin into the 'admin' table
        $ad_hashed_password = password_hash($ad_password, PASSWORD_DEFAULT);
        $insert_query = "INSERT INTO admin (ad_name, ad_email, ad_password) VALUES ('$ad_name', '$ad_email', '$ad_hashed_password')";
        $insert_result = mysqli_query($con, $insert_query);

        if ($insert_result) {
            // Successful sign-up
            $registration_successful = true;
            header('Location: signup.php');
            exit;
        } else {
            // Failed sign-up attempt
            $error_message_signup = "Failed to create an account. Please try again.";
        }
        
    }
}
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Account</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="signup">
<div class="row">
    <div class="col-md-6 mx-auto p-0">
        <div class="card">
            <div class="login-box">
                <div class="login-snip">
                    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label>
                    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
                
                    <div class="login-space">
                        <form method="post">
                            <div class="login">
                                <div class="group">
                                    <label for="user" class="label">Email Address</label>
                                    <input id="user" name="ad_email" type="email" class="input"  placeholder="Enter your username" required>
                                </div>
                                <div class="group">
                                    <label for="pass" class="label">Password</label>
                                    <input id="pass" name="ad_pass" type="password" class="input" data-type="password" placeholder="Enter your password" required>
                                </div>
                                <div class="group">
                                    <input id="check" type="checkbox" class="check" checked>
                                    <label for="check"><span class="icon"></span> Keep me Signed in</label>
                                </div>
                                <div class="group">
                                    <input type="submit" name="submit" class="button" value="Sign In">
                                </div>
                                <!-- Display the error message if it exists -->
                                <?php if (!empty($error_message)): ?>
                                    <div class="error-message"><?php echo $error_message; ?></div>
                                <?php endif; ?>
                                <div class="hr"></div>
                                <div class="foot">
                                    Forgot Password? Kindly contact the IT Support at
                                    <a href="mailto:TheSis31N@gmail.com">TheSis31N@gmail.com</a>
                                </div>
                            </div>
                        </form>

                        <!-- Sign-up form -->
                        <form method="post" action="signup.php" id="signup-form">
                            <!-- Use a different action attribute to handle sign-up form submission -->

                            <div class="sign-up-form">
                                <div class="group">
                                    <label for="username" class="label">Username</label>
                                    <input id="username" name="ad_name" type="text" class="input" placeholder="Create your Username" required>
                                </div>
                                <div class="group">
                                    <label for="email" class="label">Email Address</label>
                                    <input id="email" name="ad_email" type="email" class="input" placeholder="Enter your Email Address" required>
                                </div>
                                <div class="group">
                                    <label for="password" class="label">Password</label>
                                    <input id="password" name="ad_password" type="password" class="input" data-type="password" placeholder="Create your password" required>
                                </div>
                                <div class="group">
                                    <label for="repeat_password" class="label">Repeat Password</label>
                                    <input id="repeat_password" name="ad_repeat_password" type="password" class="input" data-type="password" placeholder="Repeat your password" required>
                                </div>
                                <div class="group">
                                    <input type="submit" name="signup_submit" class="button" value="Sign Up">
                                </div>
                                <!-- Display the error message if it exists -->
                                <?php if (!empty($error_message_signup)): ?>
                                    <div class="error-message"><?php echo $error_message_signup; ?></div>
                                <?php endif; ?>
                                <div class="hr"></div>
                                <div class="foot">
                                    <label for="tab-1">Have an Account?</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
      // JavaScript to show a pop-up message for successful registration
      <?php if ($registration_successful): ?>
          window.onload = function() {
              alert("Registration successful! You can now login with your credentials.");
          };
      <?php endif; ?>
    </script>
</body>
</html>
