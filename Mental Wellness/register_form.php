<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = $_POST['password'];
   $cpass = $_POST['cpassword'];
   $user_type = $_POST['user_type'];
   
   $select = " SELECT * FROM user_form WHERE email = '$email' ";
   
   $result = mysqli_query($conn, $select);
   
   if(mysqli_num_rows($result) > 0){
   
       $error[] = 'user already exist!';
   
   }else{
   
       if($pass != $cpass){
           $error[] = 'password not matched!';
       }else{
           $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
           $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES('$name','$email','$hashed_password','$user_type')";
           mysqli_query($conn, $insert);
           header('location:login_form.php');
       }
   }
   
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <script src="https://kit.fontawesome.com/b2d9e54096.js" crossorigin="anonymous"></script>
   <script defer src="https://friconix.com/cdn/friconix-0.2534.js"> </script>
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <img src="Login/galaxylogin.jpg" alt="" width="100%" height="auto"
      style="filter: blur(8px); background-repeat: no-repeat;">
   <i class="fa-solid fa-house"><a id="homeid" href="/mental wellness/main.php"> Mental Support and
         Counselling</a></i>
<div class="form-container">
   <div class="container">
      <div class="card card1">
         <form action="" method="post">
            <a class="singup">Sign Up</a>
            <?php
            if(isset($error)){
               foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <div class="inputBox1">
            <input type="text" name="name" required="required"><span>Name</span>
            </div>
            <div class="inputBox">
            <input type="email" name="email" required="required"><span>Email</span>
            </div>
            <div class="inputBox">
            <input type="password" name="password" required="required"><span>Password</span>
            </div>
            <div class="inputBox">
            <input type="password" name="cpassword" required="required"><span>Confirm Password</span>
            </div>

            <select name="user_type">
              <option value="user">user</option>
               <option value="admin">admin</option>
            </select>

            <input class="enter" type="submit" name="submit" value="register now" class="form-btn">
            <p>Already Have An Account? <a href="login_form.php">login now</a></p>
         </form>
      </div>
   </div>
</div>

</body>
</html>