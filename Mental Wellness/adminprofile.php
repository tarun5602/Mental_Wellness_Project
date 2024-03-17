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
  <link rel="stylesheet" href="Dashboard/dash.css">
  <title>My Profile</title>
</head>

<body>
  <?php include './adminnav.php';?>
  <div class="details">
    <div class="imgposition">
      <img src="Dashboard/profilepic.png">
    </div>
    <div class="info2">
      <form action="config.php" method="POST">
        <div id="container1">
          <div class="form-group">
            <label for="name">Name</label>
            <input class="textf" type="text" id="name" value="<?php echo $row['name'] ?>" name="name" required>
          </div>
          <div class="form-group">
            <label for="state">State</label>
            <input class="textf" type="text" id="state" value="<?php echo $row['state'] ?>" name="state" required>
          </div>
          <div class="form-group">
            <label for="city">City</label>
            <input class="textf" type="text" id="city" value="<?php echo $row['city'] ?>" name="city" required>
          </div>
          <div class="form-group">
            <label for="dob">DOB</label>
            <input class="textf" type="date" value="<?php echo $row['dob'] ?>" id="dob" name="dob" required>
          </div>
        </div>

        <div id="container2">
          <div class="form-group">
            <label for="email">Email</label>
            <input class="textf" type="email" id="email" value="<?php echo $row['email'] ?>" name="email" required>
          </div>
          <div class="form-group">
            <label for="zipcode">Zipcode</label>
            <input class="textf" type="zipcode" id="zipcode" value="<?php echo $row['zipcode'] ?>" name="zipcode"
              required>
          </div>
          <div class="form-group">
            <label for="contact">Contact</label>
            <input class="textf" type="text" id="contact" value="<?php echo $row['contact'] ?>" name="contact" required>
          </div>
          <div class="form-group">
            <label for="gender">Gender</label>

            <select class="textf" type="text" id="gender" name="gender" required>
              <option value="">-- Select Gender --</option>
              <option <?php if($row['gender']=="male" ) echo "selected" ; ?> value="male">Male</option>
              <option <?php if( $row['gender']=="female" ) echo "selected" ; ?> value="female">Female</option>
              <option <?php if( $row['gender']=="other" ) echo "selected" ; ?> value="other">Other</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label for="message">Message</label>
          <textarea class="textf Theight Tarea" id="message" value="<?php echo $row['message'] ?>" name="message"
            required></textarea>
        </div>
        <div class="form-group">
          <input type="submit" name="save_select" class="btn btn-success">
        </div>
      </form>
    </div>
  </div>

</body>

</html>