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
      
           
            <form method="POST" action="config.php">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    <label for="specialization">Specialization:</label>
    <input type="text" name="Specialization" id="Specialization" required>
    <label for="consultancy-fees">Consultancy fees:</label>
    <input type="text" name="Consultancy_fees" id="Consultancy_fees" required>
    <label for="description">Description:</label>
    <textarea name="description" id="description" rows="5" required></textarea>
    <label for="qualification">Qualification:</label>
    <input type="text" name="qualification" id="qualification" required>
    <label for="experience">Experience:</label>
    <input type="text" name="experience" id="experience" required>
    <input name = "save_doctor" class="btn" type="submit" value="Submit">          
  </form>
          </div>
    </div>
</body>
</html>
