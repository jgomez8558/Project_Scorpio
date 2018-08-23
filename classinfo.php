<?php 

session_start();

include('connection.php');

$classId = $_REQUEST['classId'];
$query = "SELECT * FROM classes WHERE classId = '".$classId."'";

$result = mysqli_query($link, $query) or die ( mysql_error());

$row = mysqli_fetch_array($result);


?>

<!DOCTYPE html>

<html>
<head>
  <title>Class</title>

 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="event.css">

</head>

  <body>

  

    <div class="container-fluid">
    
        <div class="card text-center">
            <div class="card-header">
            </div>
            <div class="card-body">
              <h5 class="card-title"><?= $row['class']?></h5>
              <img class="logo" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
              <p class="card-text"><?= $row['description']?></p>
              <p><?= $row['location']?></p>
              <p><?= $row['date']?></p>
              <p><?= $row['category']?></p>
              <a href="signup.php" class="btn btn-primary">Sign Up!</a>
              <a href="class.php" class="btn btn-primary">Return</a>
            
            </div>
            <div class="card-footer text-muted">
              
            </div>
          </div>
         
  </div>
</body>
</html>