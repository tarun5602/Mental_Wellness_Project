<?php
@include '../config.php';
$_id = $_GET['id'];

// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_doctor WHERE id = $_id";
$result = mysqli_query($conn, $sql);

// Check if the query was successful
  $row = mysqli_fetch_array($result);
  ?>
<html>
<head>
    <link href="DoctorsFile.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="docs.js"></script>
    <title> <?php echo $row['Name'] ?></title>
</head>
<body>
    <div>
        <img class="img" src="./Docimg/doc1.PNG" alt="" height="53%" width="100%">
    </div>
    <div class ="tranpic">
    <p id="doc1">Doctors</p>
       <ol id="inner-nav">
        <li class="navb"><a href="/mental wellness/main.php">Home </a></li>
        <li class="navb"><a href="/mental wellness/doctor.php">Doctor</a></li>
        <li class="navb"><a href="#"><?php echo $row['Name'] ?></a></li>
       </ol>
    </div>
    <img class="line" id="img" src="./Docimg/Doctor<?php echo $_id; ?>.JPG" width="23%" height="45%">
    <div id="text">
        <h2><?php echo $row['Name'] ?></h2>
        <h3 id="parah"><?php echo $row['Specialization'] ?></h3>
        <p id="parah"><?php echo $row['description'] ?>
        </p>
    </div><br><br>
    <a href ="../appointment.php?id=<?php echo $_id; ?>"><button class="Twobtn" type="submit">Make Appointment</button></a><br><br><br>
    <br><br><br>
    <ol class="btns">
        <li><button class="btnn opened btn1">Schedule</button></li>
        <li><button class="btnn btn2">Experience</button></li>
        <li><button class="btnn btn3">Qualification</button></li>
    </ol>
    <div id="Schedule">
        <p style="color: #858080; font-size: 30px;">Schedule of <?php echo $row['Name'] ?> is: </p>
        <table class="schedule" border="1">
            <tr>
                <th> Monday </th>
                <th> Tuesday </th>
                <th> Wednesday </th>
                <th> Thursday </th>
                <th> Friday </th>
                <th> Saturday </th>
                <th> Sunday </th>
            </tr>
            <tr>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
                <td>5pm-6pm</td>
            </tr>
        </table>
    </div>
    <div id="Experience">
        <p style="color: #858080; font-size: 30px;">Experience of <?php echo $row['Name'] ?> is: </p>
        <p style="font-size: 20px;"><?php echo $row['experience'] ?></p>
    </div>
    <div id="Qualification">
        <p style="color: #858080; font-size: 30px;">Qualification of <?php echo $row['Name'] ?> is: </p>
        <p style="font-size: 20px;"><?php echo $row['qualification'] ?></p>
    </div>
    <br><br>
    <footer id="footer">
        <div>
          <h1 id="footer-head1">Mental Wellness <span id="footer-head2">and Counselling</span></h1><br>
          <ul>
            <li id="fList"><a href="/mental wellness/main.html">Home</a></li>
            <li id="fList"><a href="/mental wellness/doctor.html">Doctors</a></li>
            <li id="fList"><a href="/mental wellness/Quiz/QuizMain.html">Quiz</a></li>
            <li id="fList"><a href="/mental wellness/articles.html">Articles</a></li>
            <li id="fList1"><a href="/mental wellness/Contact Us/Contact.html">Contact Us</a></li>
          </ul>
        </div>
        <p style="padding-top: 20px;">Mentall Wellness and Counselling © 2023 </p>
        <div id="contactD">
          <h3>Contact Details</h3>
          <p style="padding-bottom: 5px;">
            <i class="fa-solid fa-location-dot fa-lg" style="color: #ffffff; padding-right: 5px;"></i>
            Ranjit Avenue <br>
            Amritsar, Punjab
          </p>
          <p style="padding-bottom: 7px;">
            <i class="fa-solid fa-phone fa-lg" style="color: #ffffff; padding-right: 5px;"></i>
            9896541230
          </p>
          <p>
            <i class="fa-regular fa-envelope fa-lg" style="color: #ffffff; padding-right: 5px;"></i>
            support@mentalwellness.com
          </p>
        </div>
    
        <div id="About">
          <h3>About Us</h3>
          <p>Our mission is to create a safe and inclusive space where people can find
            support and education on mental health topics. We believe that everyone
            deserves access to quality mental health care, and we strive to make that
            a reality through our work.
          </p><br>
          <i class="fa-brands fa-facebook fa-2xl" style="padding-right: 3px;"></i>
          <i class="fa-brands fa-instagram fa-2xl" style="padding-right: 3px;"></i>
          <i class="fa-brands fa-twitter fa-2xl" style="padding-right: 3px;"></i>
          <i class="fa-brands fa-linkedin fa-2xl" style="padding-right: 3px;"></i>
        </div>
      </footer>
</body>
</html>