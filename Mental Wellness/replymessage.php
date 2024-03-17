<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}



$_id = $_GET['id'];


// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_adminmessages";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
// Check if the query was successful

$sql2 = "SELECT * FROM user_messages  WHERE id =$_id" ;
$result2 = $conn->query($sql2);
$row2 = mysqli_fetch_array($result2);
// Fetch the data and store it in an array



?>
<!DOCTYPE html>
<html lang="en">
<head>
     <link href="./Dashboard/dash.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    label {
      display: block;
      margin-bottom: 5px;
    }
    input[type="text"], textarea {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      box-sizing: border-box;
      border: 2px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }
    input[type="submit"] {
      background-color: #0072c6;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
  </style>
<?php include './adminnav.php';?>
<div class="Mcontainer">
      
           
<form class="Mform" action = "config.php" method = "POST" >
            <label style = "display:none;" for="name">To:</label>
              <input class="t1" type="text" id="replyto" style = "display:none;" name="replyto" value = "<?php echo $row2['user_from'] ?>" placeholder="Enter your name...">
              <label for="name">Name:</label>
              <input class="t1" type="text" id="name"  name="name" value = "<?php echo $row2['name'] ?>" readonly placeholder="Enter your name...">
              <label for="email">Email:</label>
              <input class="t1" type="text" id="email" name="email" value = "<?php echo $row2['email'] ?>" readonly placeholder="Enter your email...">
              <label for="subject">Subject:</label>
              <input class="t1" type="text" id="subject" name="subject" placeholder="Enter message subject...">
              <label for="message">Message:</label>
              <textarea class="t1" id="message" name="message" placeholder="Enter your message..."></textarea>
              <label style = "display:none;" for="name">To:</label>
              <input class="t1" type="text" id="replytomessageid" style = "display:none;" name="replytomessageid" value = "<?php echo $row2['id'] ?>" placeholder="Enter your name...">
              
              <input class="btn" name = "save_reply" type="submit" value="Send Message">
            </form>
          </div>
    </div>
</body>
</html>