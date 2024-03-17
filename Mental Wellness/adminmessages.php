<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_id'])){
   header('location:login_form.php');
}



// Get the doctor's ID from the URL


// Query the database for the user's information using the user ID
$sql = "SELECT * FROM user_messages";
$result = mysqli_query($conn, $sql);

// Check if the query was successful

$sql = "SELECT * FROM user_messages";
$result = $conn->query($sql);

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
    <title>Messages</title>
</head>
<body>
<?php include './adminnav.php';?>

<!DOCTYPE html>
<html>
<head>
  
  <style>
    table {
      border-collapse: collapse;
      width: 80%;
      margin-left:8%;
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
    .head{
        display: flex;
    justify-content: space-around;
    }
  </style>
</head>
<body>
  <h1 class = "head">User Messages</h1>
  <?php if (count($data) > 0): ?>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Subject</th>
          <th>Message</th>
          <th>From</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($data as $row): ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['subject']; ?></td>
            <td><?php echo $row['message']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td  style= "width:10%; height:10%;" ><a href = "./replymessage.php?id=<?php echo $row['id']; ?>"class = "btn btn-success" >Reply</a></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  <?php else: ?>
    <p>No messages found.</p>
  <?php endif; ?>

</body>
</html>