<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}



// Get the doctor's ID from the URL
$_id = $_GET['id'];


// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_doctor WHERE id = $_id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful


  $row = mysqli_fetch_array($result);
    
    // ...


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://friconix.com/cdn/friconix-0.2534.js"> </script>
    <link rel="stylesheet" href="./Dashboard/dash.css">
    <title>Appointment</title>
</head>

<body>
<div class="sideNav">
  <div id="heading">
    <img src="/mental wellness/images/logoWhite.png" height="70px" width="70px">
    <a href="/mental wellness/main.php"><h2 class="heading">Mental wellness and Counselling</h2></a>
  </div>
  <hr>
  <ul>
    <li><a href="profile.php">Profile</a></li>
    <li class="has-submenu">
      <a href="#">Messages</a>
      <ul class="submenu" style = "display:none;">
        <li><a href="./sendMessage.php">Compose</a></li>
        <li><a href="./usermessages.php">Replies</a></li>
        
      </ul>
    </li>
    <li><a href="doctor.php">Make an Appointment</a></li>
    <li><a href="changepass.php">Change Password</a></li>
    <li style="margin-top: 45vh;"><a href="logout.php">Log Out</a></li>
  </ul>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    // show/hide submenu on click
    $('.has-submenu').click(function() {
      $(this).find('.submenu').toggle();
    });

    // hide submenu when clicking outside of it
   
  });
</script>
    <div class="content">
        <div class="navb">
            <i style="font-size: 27px; color: black;" class="fi-xnsuxl-three-bars-solid"></i>
            <p id="head1">Make Appointment</p>
        </div>
        <div class="details">
            <div class="info info3">
                <form id="Form-lay" action = "config.php" method = "POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="textf" value = "<?php echo $row['Name'] ?>" type="text" id="name" name="name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Specialization</label>
                        <input class="textf" type="text" value = "<?php echo $row['Specialization'] ?>" id="specialization" name="specialization" readonly>
                    </div>
                    <div class="form-group">
                        <label for="name">Consultancy Fee</label>
                        <input class="textf" type="number" value = "<?php echo $row['Consultancy_fees'] ?>" id="consultancyFee" name="consultancyFee" readonly >
                    </div>
                    <div class="form-group">
                        <label for="name">Time</label>
                        <input class="textf" type="time" id="time" name="time" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Date</label>
                        <input class="textf" type="date" id="date" name="date" required>
                    </div>
                    <label for="message">Message</label>
                    <textarea class="textf Tarea" id="message" name="message" required></textarea>
                    <input name = "save_appointment" class="btn" type="submit" value="Submit">
              
                </form>
            </div>
        </div>
    </div>
</body>

</html>