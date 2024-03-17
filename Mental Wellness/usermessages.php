<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}

$_id = $_SESSION['user_id'];


// Get the doctor's ID from the URL

$sql = "SELECT * FROM `user_adminmessages` WHERE `reply_to` = $_id ";

$result = mysqli_query($conn, $sql);
// Query the database for the user's information using the user ID
$sql = "SELECT * FROM `user_adminmessages` WHERE `reply_to` = $_id";

$result = $conn->query($sql);

// Check if the query was successful



// Fetch the data and store it in an array
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}
  


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./Dashboard/dash.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>
</head>
<body>

<!DOCTYPE html>
<html>
<head>
<style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin-left:8%;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    thead {
      background-color: #0072c6;
      color: #fff;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .head{
        display: flex;
    justify-content: space-around;
    }
  </style>
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
            <i style="font-size: 27px;" class="fi-xnsuxl-three-bars-solid"></i>
            <p id="head1">Replies</p>
        </div>
  
</head>
<body>
  <h1 class = "head">User Messages</h1>
  <?php if (count($data) > 0): ?>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Subject</th>
          <th>Message</th>
 
         
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
           
            
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No messages found.</p>
  <?php endif; ?>

</body>
</html>