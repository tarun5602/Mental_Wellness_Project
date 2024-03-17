<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <script src="https://kit.fontawesome.com/b2d9e54096.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="contactus.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
  <div id="home">
    <a style="text-decoration: none; color: white;" href="/mental wellness/main.php"><i class="fa-solid fa-house">
        Mental Support and Counselling</i></a>
  </div>
  <div class="container">
    <div class="content">
      <div class="formbold-main-wrapper">

        <div class="formbold-form-wrapper">
          <form class="formcu" action="/" method="POST">
            <h1 class="header">Contact Us</h1>
            <div class="formbold-mb-5">
              <label for="name" class="formbold-form-label">Username </label>
              <input type="text" name="name" id="name" placeholder="Username" class="formbold-form-input" />
            </div>

            <div class="formbold-mb-5">
              <label for="email" class="formbold-form-label"> Email Address </label>
              <input type="email" name="email" id="email" placeholder="Enter your email" class="formbold-form-input" />
            </div>

            <div class="formbold-mb-5">
              <label for="subject" class="formbold-form-label"> Subject </label>
              <input type="text" name="subject" id="subject" placeholder="Enter your subject"
                class="formbold-form-input" />
            </div>

            <div class="formbold-mb-5">
              <label for="message" class="formbold-form-label"> Message </label>
              <textarea rows="6" name="message" id="message" placeholder="Type your message"
                class="formbold-form-input"></textarea>
            </div>

            <div>
              <button onclick="showMessage()" class="formbold-btn">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
  <script>
    function showMessage() {
      alert("Message Successfully Sent");
  }
</script>
</body>

</html>