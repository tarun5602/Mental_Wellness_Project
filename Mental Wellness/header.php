<?php
@include 'config.php';

    
session_start();
if(isset($_SESSION['user_id'])){
  $user_id = $_SESSION['user_id'];

  // Query the database for the user's information using the user ID
  $sql = "SELECT * FROM user_form WHERE id = $user_id";
  $result = mysqli_query($conn, $sql);
  
  // Check if the query was successful
  
    $row = mysqli_fetch_array($result);
  
}

if (isset($_SESSION['user_id'])&&$row['user_type']=='user') {
  // User is logged in, show the "logout" link
  $loginout = '<a style="text-decoration: none;" href="./logout.php"><button class="btn-position">Logout</button></a>/<a style="text-decoration: none;" href="./profile.php"><button class="btn-position">profile</button></a>';

} else if(isset($_SESSION['user_id'])&&$row['user_type']=='admin'){
  $loginout = '<a style="text-decoration: none;" href="./logout.php"><button class="btn-position">Logout</button></a>/<a style="text-decoration: none;" href="./adminprofile.php"><button class="btn-position">profile</button></a>';
}

else{
  // User is not logged in, show the "login" link
  $loginout = '<a style="text-decoration: none;" href="./login_form.php"><button class="btn-position">Login</button></a>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
    <div class="logo">
      <img src="./images/logoWhite.png">
      <a href="./main.php"><h1>Mental Wellness and Counselling</h1></a>
    </div>
    <nav>
			<ul class="nav-link">
				<li><a href="./doctor.php">Doctors</a></li>
        <li><a href="./Quiz/QuizMain.php">Quiz</a></li>
				<li><a href="./articles.php">Articles</a></li>
				<li><a href="./Contact Us/Contact.php">Contact Us</a></li>
        <?php echo  $loginout?>
			</ul>
		</nav>
  </header>
</body>
</html>