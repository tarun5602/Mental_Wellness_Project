<?php

$conn = mysqli_connect('localhost','root','','user_db');


if(isset($_POST['save_select']))
{
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $zipcode = $_POST['zipcode'];
    $message = $_POST['message'];
    $sql =  "UPDATE `user_form` SET `name`='$name',`email`='$email',`gender`='$gender',`dob`='$dob',`contact`='$contact',`state`='$state',`city`='$city',`zipcode`='$zipcode',`message`='$message' WHERE `email` = '$email'";
    

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}
if(isset($_POST['save_appointment']))
{
    $name = $_POST['name'];
    $specialization = $_POST['specialization'];
    $consultancy = $_POST['consultancyFee'];
    $Date = $_POST['date'];
    $Time = $_POST['time'];
    $message = $_POST['message'];
    $sql =  "INSERT INTO `user_appointment`(`Name`, `Specialization`, `Consultancy fees`, `Time`, `Date`, `Message`) VALUES ('$name','$specialization','$consultancy','$Date',' $Time ','$message')";
    

    if (mysqli_query($conn, $sql)) {
        echo "appointment booked successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

//send message

if(isset($_POST['save_message']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $from = $_POST['from'];
   
    
    $sql = "INSERT INTO `user_messages`( `user_from`, `name`, `email`, `subject`, `message`) VALUES (' $from','$name','$email','$subject',' $message')";
    if(mysqli_query($conn, $sql)) {
        echo "Message sent successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

//add doctor

if(isset($_POST['save_doctor']))
{
    $name = $_POST['name'];
    $specializationd = $_POST['Specialization'];
    $consultancyfees = $_POST['Consultancy_fees'];
    $description = $_POST['description'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
   
    
    $sql = "INSERT INTO `user_doctor`(`Name`, `Specialization`, `Consultancy_fees`, `description`, `qualification`, `experience`) VALUES ('$name','$specializationd','$consultancyfees','$description','$qualification','$experience')";
    if(mysqli_query($conn, $sql)) {
        echo "Doctor added successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}


//change password

if(isset($_POST['save_reply']))
{
    $replyto = $_POST['replyto'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $replymessageid = $_POST['replytomessageid'];
   
    
   $sql =  "INSERT INTO `user_adminmessages`( `reply_to`, `email`,`name`, `subject`, `message`, `replymessageid`) VALUES ('$replyto',' $email','$name','$subject','$message','$replymessageid')";
    if(mysqli_query($conn, $sql)) {
        echo "Message sent successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

  
?>




