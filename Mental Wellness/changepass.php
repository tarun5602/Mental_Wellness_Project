<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    // Get the form data
$current_password = $_POST['current-password'];
$new_password = $_POST['new-password'];
$confirm_password = $_POST['confirm-password'];
$user_id = $_SESSION['user_id'];

// Check if the current password is correct
$sql = "SELECT password FROM user_form WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = mysqli_fetch_array($result);
    if (!password_verify($current_password, $row['password'])) {
        $error = 'The current password is incorrect.';
    }
}

// Check if the new password and confirm password fields match
if ($new_password != $confirm_password) {
    $error = 'The new password and confirm password fields do not match.';
}

// If there are no errors, update the password in the database
if (!isset($error)) {
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    $sql = "UPDATE user_form SET password = '$hashed_password' WHERE id = $user_id";

    if ($conn->query($sql) === TRUE) {
        $success = 'Your password has been updated successfully.';
    } else {
        $error = 'Error updating password: ' . $conn->error;
    }
}

  }
  


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://friconix.com/cdn/friconix-0.2534.js"> </script>
    <link rel="stylesheet" href="Dashboard/dash.css">
    <title>Change Password</title>
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
            <p id="head1">Change Password</p>
        </div>
        <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <?php if (isset($success)): ?>
    <p style="color: green;"><?php echo $success; ?></p>
  <?php endif; ?>
        <div class="details">
            <div class="info info4">

                <form class="Form-lay Form-lay2" method = "POST" >
                    <div class="form-group">
                        <label for="current-password">Current Password</label>
                        <input class="textf" type="password" id="current-password" name="current-password" required>
                    </div>
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input class="textf" type="password" id="new-password" name="new-password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input class="textf" type="password" id="confirm-password" name="confirm-password" required>
                    </div>
                    <button class="btn" type="submit" value="Submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>