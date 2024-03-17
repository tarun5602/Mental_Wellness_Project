<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = $_POST['password'];
 
   
   $select = "SELECT * FROM user_form WHERE email = '$email'";
   $result = mysqli_query($conn, $select);
   
   if(mysqli_num_rows($result) > 0){
       $row = mysqli_fetch_assoc($result);
       if(password_verify($password, $row['password'])){
           if($row['user_type'] == 'admin'){
               $_SESSION['user_id'] = $row['id'];
               header('location:adminprofile.php');
           }elseif($row['user_type'] == 'user'){
               $_SESSION['user_id'] = $row['id'];
               header('location:profile.php');
           }
       }else{
           $error[] = 'Incorrect email or password!';
       }
   }else{
       $error[] = 'Incorrect email or password!';
   }
   

};
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <script src="https://kit.fontawesome.com/b2d9e54096.js" crossorigin="anonymous"></script>
   <script defer src="https://friconix.com/cdn/friconix-0.2534.js"> </script>
   <link rel="stylesheet" href="css/style.css">

</head>
<script>
  
</script>
<body>

   <img src="Login/galaxylogin.jpg" alt="" width="100%" height="auto"
      style="filter: blur(8px); background-repeat: no-repeat;">
   <i class="fa-solid fa-house"><a id="homeid" href="/mental wellness/main.php"> Mental Support and
         Counselling</a></i>
   <div class="row">
      <div class="column column1">
         <h2 class="parah">Mental info</h2>
         <p class="parah">your mental health is our priority,your happiness is an essential,your self care is a
            necessity
         </p><br>
         <h4 class="parah">QUIZ</h4>
         <p class="parah">take the easy quiz and find about your problems</p><br>
         <h4 class="parah">ARTICLES</h4>
         <p class="parah">articles are published every week by experts</p><br>
         <h4 class="parah">CONSULT NEAREST DOCTORS</h4>
         <p class="parah">find nearest doctor through our zipcode facility</p>
      </div>

      <div class="form-container">
         <form action="" method="post">
            <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
            <div class="column">
               <div class="card">
                  <i class="fi-xnsuxl-team-solid" style="font-size: 25px;"></i><a class="login">Log in</a>
                  <div class="inputBox">
                     <input type="email" name="email" required="required"><span>Username</span>
                  </div>
                  <div class="inputBox">
                     <input type="password" name="password" required="required"><span>Password</span>
                  </div>
                  <div class="inputBox">
                     <input class="enter" type="submit" name="submit" value="login now" class="form-btn">
                  </div>
                     <p>Not a member? <a href="register_form.php">Register now</a></p>
               </div>
            </div>
         </form>
      </div>
   </div>
</body>

</html>