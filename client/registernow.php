<?php

@include 'config.php';
include('../admin/conn.php');

if(isset($_POST['submit'])){

   $patientName = mysqli_real_escape_string($con, $_POST['PatientName']);
   $birthdate = $_POST['Birthdate'];
   $age = mysqli_real_escape_string($con, $_POST['Age']);
   $diagnosis = mysqli_real_escape_string($con, $_POST['Diagnosis']);
   $parentGuardianName = mysqli_real_escape_string($con, $_POST['ParentGuardianName']);
   $relationshipToPatient = mysqli_real_escape_string($con, $_POST['RelationshipToPatient']);
   $phone = mysqli_real_escape_string($con, $_POST['PhoneNum']);
   $messengerName = mysqli_real_escape_string($con, $_POST['MessengerName']);
   $email = mysqli_real_escape_string($con, $_POST['Email']);
   $viberNum = mysqli_real_escape_string($con, $_POST['ViberNum']);
   $address = mysqli_real_escape_string($con, $_POST['Address']);
   $serviceType = $_POST['ServiceType'];
   $preferredSchedule = $_POST['PreferredSchedule'];

   // Combine the day, month, and year into a single string for the Birthdate column in the database
   $birthdate = date('Y-m-d', strtotime($birthdate));

   $select = "SELECT * FROM registration WHERE FullName = '$patientName' && Email = '$email' && PhoneNum = '$phone' ";

   $result = mysqli_query($con, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User already exists!';

   } else {
      $insert = "INSERT INTO registration (FullName, BirthDate, Age, Diagnosis, ParentGuardianName, RelationshipToPatient, PhoneNum, MessengerName, Email, ViberNum, Address, ServiceType, PreferredSchedule)
      VALUES ('$patientName', '$birthdate', '$age', '$diagnosis', '$parentGuardianName', '$relationshipToPatient', '$phone', '$messengerName', '$email', '$viberNum', '$address', '$serviceType', '$preferredSchedule')";
      mysqli_query($con, $insert);
      echo "<script>alert('Registration Successful');</script>
          <script>window.location.href = 'index.php'</script>";
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="../assets/img/favicon.png">
    <link rel="stylesheet" href="../assets/css/regstyle.css">
    <title>4Corners Registration Form</title>
</head>
<body>
    <div class="container">
        <form class="main-form" action="registernow.php" method="POST" enctype="multipart/form-data">
            <h2>4Corners Registration Form</h2>
            <div class="content">
                <!-- Patient's Name -->
                <div class="input-field">
                    <label for="patientName">Patient's Name</label>
                    <input type="text" placeholder="Enter patient's name" name="PatientName" required>
                </div>
                <!-- Birthdate -->
                <div class="input-field">
                    <label for="birthdate">Birthdate</label>
                    <input type="date" name="Birthdate" required>
                </div>
                <!-- Age -->
                <div class="input-field">
                    <label for="age">Age</label>
                    <input type="number" placeholder="Enter patient's age" name="Age" required>
                </div>
                <!-- Diagnosis -->
                <div class="input-field">
                    <label for="diagnosis">Diagnosis</label>
                    <input type="text" placeholder="Enter diagnosis" name="Diagnosis" required>
                </div>
                <!-- Parent/Guardian's Name -->
                <div class="input-field">
                    <label for="parentGuardianName">Parent/Guardian's Name</label>
                    <input type="text" placeholder="Enter parent/guardian's name" name="ParentGuardianName" required>
                </div>
                <!-- Relationship to the Patient -->
                <div class="input-field">
                    <label for="relationshipToPatient">Relationship to the Patient</label>
                    <input type="text" placeholder="Enter relationship to the patient" name="RelationshipToPatient" required>
                </div>
                <!-- Phone Number -->
                <div class="input-field">
                    <label for="phoneNum">Phone Number</label>
                    <input type="text" placeholder="Enter phone number" name="PhoneNum" required>
                </div>
                <!-- Facebook Messenger Name -->
                <div class="input-field">
                    <label for="messengerName">Facebook Messenger Name</label>
                    <input type="text" placeholder="Enter Facebook Messenger name" name="MessengerName">
                </div>
                <!-- Email Address -->
                <div class="input-field">
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Enter email address" name="Email" required>
                </div>
                <!-- Viber Number -->
                <div class="input-field">
                    <label for="viberNum">Viber Number</label>
                    <input type="text" placeholder="Enter Viber number" name="ViberNum">
                </div>
                <!-- Address -->
                <div class="input-field">
                    <label for="address">Address</label>
                    <input type="text" placeholder="Enter address" name="Address" required>
                </div>
                <!-- What type of service are you planning to avail? -->
                <div class="input-field">
                    <label for="serviceType">What type of service are you planning to avail?</label>
                    <select name="ServiceType" required>
                        <option value="" selected="selected">--Select Service Type--</option>
                        <option value="Physical Therapy">Physical Therapy</option>
                        <option value="Occupational Therapy">Occupational Therapy</option>
                        <option value="Speech Therapy">Speech Therapy</option>
                        <option value="Developmental and Behavioral Pediatrician Assessment">Developmental and Behavioral Pediatrician Assessment</option>
                        <option value="Splinting Services">Splinting Services</option>
                    </select>
                </div>
                <!-- Preferred Schedule -->
                <div class="input-field">
                    <label for="preferredSchedule">Preferred Schedule</label>
                    <div class="work-type">
                        <input type="radio" name="PreferredSchedule" id="morningSession" value="Morning Session" required>
                        <label for="morningSession">Morning Session</label><br>
                        <input type="radio" name="PreferredSchedule" id="afternoonSession" value="Afternoon Session">
                        <label for="afternoonSession">Afternoon Session</label>
                    </div>
                </div>
                <!-- Privacy and Consent -->
                <div class="privacy-consent">
                    <p>Privacy and Consent</p>
                    <p>By submitting this form, I acknowledge that all of the details I've provided will only be used for 4Corners Therapy Center's client engagement purposes. The information will be accessible only to authorized personnel. I understand that my personal information will be kept secure and will not be shared with any other parties.</p>
                    <div class="gender-title">
                    <input type="checkbox" id="agreeCheckbox" name="agreeCheckbox" required>
                    <label for="agreeCheckbox">I have read and agree to the statement above.</label>
                </div>
                <?php if (isset($error) && count($error) > 0): ?>
                    <div class="alert">
                        <?php foreach ($error as $err): ?>
                            <p><?php echo $err; ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                <!-- Submit Button -->
                <div class="button-container">
                    <button type="submit" name="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
