<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
    /* CSS for the sub-menu */
    .sub-menu {
        display: none;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .sub-menu li {
        margin: 0;
        padding: 0;
    }
    .sub-menu li a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: lightgray;
        
    }
    .sub-menu li a:hover {
        background-color: #eee;
    }
</style>
    
<div class="sideNav">
        <div id="heading">
            <img src="/mental wellness/images/logoWhite.png" height="70px" width="70px">
            <a style="color: white;" href="/mental wellness/main.php"><h2 class="heading">Mental wellness and Counselling</h2></a>
        </div>
        <hr>
        <ul>
  <li <?php if (basename($_SERVER['PHP_SELF']) == 'adminprofile.php') { echo 'class="active"'; $activePage = 'Profile'; } ?>><a href="./adminprofile.php">Profile</a></li>
  <li <?php if (basename($_SERVER['PHP_SELF']) == 'adminmessages.php') { echo 'class="active"'; $activePage = 'Messages'; } ?>>
    <a href="#">Messages</a>
    <ul class="sumenu">
        <li><a href="./adminmessages.php">Inbox</a></li>
        <li style = "display:none;"<?php if (basename($_SERVER['PHP_SELF']) == 'replymessage.php') { echo 'class="active"'; $activePage = 'Reply'; } ?>><a href="./replymessage.php">Send Message</a></li>
    </ul>
</li>
  <li <?php if (basename($_SERVER['PHP_SELF']) == 'adminchangepass.php') { echo 'class="active"'; $activePage = 'Change Password'; } ?>><a href="./adminchangepass.php">Change Password</a></li>
  <li <?php if (basename($_SERVER['PHP_SELF']) == 'adddoctor.php') { echo 'class="active"'; $activePage = 'Add Doctor'; } ?>><a href="./adddoctor.php">Add Doctor</a></li>
  <li style="margin-top: 37vh;"><a href="logout.php">Log Out</a></li>
</ul>


    </div>
    <div class="content">
        <div class="navb">
            <p id="head1"><?php echo $activePage ?></p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    
    $(document).ready(function() {
    $('li:has(ul)').click(function(e) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).children('.sub-menu').slideUp(400);
        } else {
            $('li:has(ul)').removeClass('active');
            $(this).addClass('active');
            $(this).children('.sub-menu').slideDown(400);
        }
        e.stopPropagation();
    });
});

</script>