<?php
// Checks if user is login correctly
include('authlogin.php');

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
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
    <div class="container-fluid p-0 color">
      <div class="row">
      <?php
      while($row = mysqli_fetch_assoc($result)){
      ?>
        <div class="col">
          <img src="https://dz2cdn4.dzone.com/storage/rc-covers/8757499-recardheader90.png" id="background">
          <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
          <h2 class="name"> <?=$row['firstName']?> <?=$row['lastName']?> </h2>
          <a href="setting.php"> <button type="button" class="btn btn-primary float-right clearfix mt-3 mr-5">Edit</button> </a>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-3 col-md-4 col-sm-12 p-0 mx-auto">
          <div class="card about">
            <div class="card-body">
              <h4 class="card-title">About <?=$row['firstName']?> <?=$row['lastName']?></h4>
              <p>Address: <?=$row['address']?></p>
              <p>Phone: <?=$row['phone']?></p>
              <p>Email: <?=$row['email']?></p>
            </div>
          </div>
        </div>
        <?php } ?>
        <div class="col-lg-8 col-md-8 col-sm-12 p-0 m-auto">
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
              <img class="class-img float-left clearfix mr-3" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
                <h4 class="mb-3"><?=$row['class']?></h4>
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
      <footer>
        <div class="centered clearfix">
          <div class="footer-logo">
            <img class="logo" src="/braintrendy/assets/logo2.png">
            <a href=""><i class="fab fa-facebook"></i></a>
            <i class="fab fa-linkedin"></i>
            <i class="fab fa-twitter-square"></i>
          </div>
          <div class="footer-contact">
            <h3><a href="">Contact</a></h3>
            <h6><a href="mailto:">fake@fake.com</a></h6>
            <h6><a href="tel:">123-456-7890</a></h6>
            <h6><a href="">123 Fake St<br />Fake, PA 11111</a></h6>
          </div>
          <div class="footer-navigation">
            <div class="footer-links-holder">
              <h3><a href="">Section 1</a></h3>
              <ul class="footer-links">
                <li><a href="">Page Title 1</a></li>
                <li><a href="">Page Title 2</a></li>
                <li><a href="">Page Title 3</a></li>
                <li><a href="">Page Title 4</a></li>
              </ul>
            </div>
            <div class="footer-links-holder">
              <h3><a href="">Section 2</a></h3>
              <ul class="footer-links">
                <li><a href="">Page Title 1</a></li>
                <li><a href="">Page Title 2</a></li>
                <li><a href="">Page Title 3</a></li>
                <li><a href="">Page Title 4</a></li>
              </ul>
            </div>
            <div class="footer-links-holder">
              <h3><a href="">Section 3</a></h3>
              <ul class="footer-links">
                <li><a href="">Page Title 1</a></li>
                <li><a href="">Page Title 2</a></li>
                <li><a href="">Page Title 3</a></li>
                <li><a href="">Page Title 4</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bottom-bar">
            All Rights Reserved © 2016 | <a href="">Privacy Policy</a> | <a href="">Terms of Service</a>
        </div>
      </footer>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="home.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
  </body>
</html>