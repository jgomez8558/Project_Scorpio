<?php
session_start();
include('connection.php');

$tempId = (string)$_SESSION['id'];
$query = "SELECT * FROM profile WHERE userId= $tempId ";
$result = mysqli_query($link, $query) or die (mysql_error());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css"/>
    <link rel="stylesheet" href="navbar.css">
  </head>
  <body>
    <nav>
      <ul>
        <li>
          <a href="/braintrendy/home.php">Home</a>
        </li>
        <li>
          <a href="/braintrendy/class.php">Classes</a>
        </li>
        <li>
          <a href="/braintrendy/profile.php">Profile</a>
        </li>
        <li>
          <a href="/braintrendy/logout.php">Logout</a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid p-0">
      <div class="row">
      <?php
      while($row = mysqli_fetch_assoc($result)){
      ?>
        <div class="col">
          <img src="https://dz2cdn4.dzone.com/storage/rc-covers/8757499-recardheader90.png" id="background">
          <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
          <h2 class="name"> <?=$row['firstName']?> <?=$row['lastName']?> </h2>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12 p-0">
          <div class="card about">
            <div class="card-body">
              <h4 class="card-title">About <?=$row['firstName']?> <?=$row['lastName']?></h4>
              <p><?=$row['address']?></p>
              <p><?=$row['phone']?></p>
              <p><?=$row['email']?></p>
              <a href="setting.php"> <button type="button" class="btn btn-primary">Edit</button> </a>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-lg-7 col-md-7 col-sm-12 p-0 m-auto">
          <div class="card classes">
            <div class="card-body">
              <h4 class="card-title">Classes</h4>
            </div>
            <?php
              $query = "SELECT * FROM classes WHERE userId= $tempId ";
              $result = mysqli_query($link, $query) or die (mysql_error());
              while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="card m-3 ">
              <div class="card-body">
                <h5 class="card-title"><?=$row['class']?></h5>
                <p class="card-text"><?=$row['location']?></p>
                <h6 class="card-subtitle mb-2 text-muted"><?=$row['date']?></h6>
                <p class="card-text"><?=$row['description']?></p>
                <a href="#" class="card-link">Register</a>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="home.js"></script>
  </body>
</html>