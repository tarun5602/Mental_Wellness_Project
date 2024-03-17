<!DOCTYPE html>
<html lang="en">

<head>
  <link href="./file.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctors</title>
</head>

<body>
  <?php include 'header.php';?>
  <div class="docheight">
    <div id="tranpic">
      <div>
        <img src="./images/doc1.PNG" width="100%" height="421pxs" class="docbg">
      </div>
    </div>
    <div class="dochead">Doctors</div>
  </div>

  <div id="flexdocs">
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor1.jpg" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=1">+</a> <br> Dr. Sameer Sahni
      </div>
      <div class="quali">
        Mental Counsellor
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor2.jpg" height=300px width=300px></a>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=2">+</a><br> Dr. Shikha Saini
      </div>
      <div class="quali">
        Psychologist
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor3.jpg" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=3">+</a><br> Dr. Deepali Batra
      </div>
      <div class="quali">
        Clinical Psychologist
      </div>
    </div>
  </div>

  <div id="flexdocs">
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor4.jpg" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=4">+</a><br>
        Dr. Shikha singh
      </div>
      <div class="quali">
        Behavioural Psychologist
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor5.JPG" height=300px width=300px></a>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=5">+</a><br>
        Dr. Sonia kapur
      </div>
      <div class="quali">
        Clinical Psychologist
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor6.JPG" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=6">+</a><br>
        Dr. Mukul aggarwal
      </div>
      <div class="quali">
        Psychiartist
      </div>
    </div>
  </div>

  <div id="flexdocs">
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor7.jpg" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=7">+</a><br>
        Dr. Sanyam Khanna
      </div>
      <div class="quali">
        Therapist
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor8.jpg" height=300px width=300px></a>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=8">+</a><br>
        Dr. Sanyam sharma
      </div>
      <div class="quali">
        Therapist
      </div>
    </div>
    <div class="maindoc">
      <img class="line" src="./Doctors/Docimg/Doctor9.jpg" height=300px width=300px>
      <div class="mainame">
        <a style="text-decoration: none;" class="dline" href="./Doctors/doctor.php?id=9">+</a><br>
        Dr. Mukul Sinha
      </div>
      <div class="quali">
        Mental Counsellor
      </div>
    </div>
  </div>

  <footer id="footer">
    <div>
      <h1 id="footer-head1">Mental Wellness <span id="footer-head2">and Counselling</span></h1><br>
      <ul>
        <li id="fList"><a href="./main.php">Home</a></li>
        <li id="fList"><a href="./doctor.php">Doctors</a></li>
        <li id="fList"><a href="./Quiz/QuizMain.php">Quiz</a></li>
        <li id="fList"><a href="./articles.php">Articles</a></li>
        <li id="fList1"><a href="./Contact Us/Contact.php">Contact Us</a></li>
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