<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}



// Get the doctor's ID from the URL


// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_appointment WHERE Date >= CURDATE()";
$result = mysqli_query($conn, $sql);

// Check if the query was successful


// Fetch the data and store it in an array
$data = array();
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $data[] = $row;
  }
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./Dashboard/dash.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointments</title>
</head>
<body>
<?php include './adminnav.php';?>
<title>User Appointments</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 8px;
      text-align: left;
    }

    thead {
      background-color: #0072c6;
      color: #fff;
    }

    tbody tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>

<body>
  <h1>User Appointments</h1>
  <?php if (count($data) > 0): ?>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Date</th>
          <th>Time</th>
          <th>Message</th>
          <th>Department</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row): ?>
          <tr>
            <td><?php echo $row['appointment_id']; ?></td>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Date']; ?></td>
            <td><?php echo $row['Time']; ?></td>
            <td><?php echo $row['Message']; ?></td>
            <td><?php echo $row['Specialization']; ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No appointments found.</p>
  <?php endif; ?>
</body>
</html>