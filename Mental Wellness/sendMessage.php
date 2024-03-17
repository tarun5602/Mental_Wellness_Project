<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}



// Get the user ID from the session
$user_id = $_SESSION['user_id'];

// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_form WHERE id = $user_id";
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
    <title>Chat</title>
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
          <p id="head1">Messages</p>
        </div>

        <div class="Mcontainer">
            <h1>Message to Doctor</h1>
            <form class="Mform" action = "config.php" method = "POST" >
            <label style = "display:none;" for="name">from:</label>
              <input class="t1" type="text" id="from" style = "display:none;" name="from" value = "<?php echo $row['id'] ?>" placeholder="Enter your name...">
              <label for="name">Name:</label>
              <input class="t1" type="text" id="name" name="name" placeholder="Enter your name...">
              <label for="email">Email:</label>
              <input class="t1" type="text" id="email" name="email" placeholder="Enter your email...">
              <label for="subject">Subject:</label>
              <input class="t1" type="text" id="subject" name="subject" placeholder="Enter message subject...">
              <label for="message">Message:</label>
              <textarea class="t1" id="message" name="message" placeholder="Enter your message..."></textarea>
              <input class="btn" name = "save_message" type="submit" value="Send Message">
            </form>
          </div>
    </div>
</body>

</html>