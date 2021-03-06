<?php

  // Checks if user is login correctly
  include('authlogin.php');

  // Connects to database
  include('connection.php');

  // Displays the user's information
  $tempId = (string)$_SESSION['id'];
  $role = (string)$_SESSION['role'];
  $query = "SELECT * FROM profile WHERE userId= $tempId ";
  $result = mysqli_query($link, $query) or die (mysql_error());

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Profile</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" href="profile.css" />
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>

<body>

  <nav>
    <ul>
      <li>
        <a class="white" href="/braintrendy/home.php">Home</a>
      </li>
      <li>
        <a class="white" href="/braintrendy/class.php">Classes</a>
      </li>
      <li>
        <a class="white" href="/braintrendy/profile.php">Profile</a>
      </li>
      <li>
        <a class="white" href="/braintrendy/logout.php">Logout</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid p-0">
    <div class="row">
      <?php

        // Displays all the classes that user created
        while($row = mysqli_fetch_assoc($result)){

      ?>
      <div class="col">
        <img src="https://www.xmple.com/wallpaper/azure-cyan-gradient-linear-1920x1080-c2-56baed-56edea-a-0-f-14.svg"
          id="background">
        <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
        <h2 class="name">
          <?=$row['firstName']?>
          <?=$row['lastName']?>
        </h2>
        <a href="setting.php"> <input name="edit" type="button" class=" btn btn-primary float-right clearfix mt-3 mr-5"
            value="Edit" /> </a>
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-lg-3 col-md-4 col-sm-12 p-0 mx-auto">
        <div class="card about ">
          <div class="card-body">
            <h4 class="card-title">About</h4>
            <p>Address:
              <?=$row['address']?>
            </p>
            <p>Phone:
              <?=$row['phone']?>
            </p>
            <p>Email:
              <?=$row['email']?>
            </p>
          </div>
        </div>
      </div>
      <?php } ?>

      <div class="col-lg-8 col-md-8 col-sm-12 p-0 m-auto">

        <!-- Shows button to create classes if you are a teacher -->
        <?php if($role > 1 ) { ?>
        <div class="card classes">
          <div class="card-body">
            <h4 class="card-title">Created Classes</h4>
          </div>
          <?php

          // Displays all classes from database based on userId
          $query = "SELECT * FROM classes WHERE userId= $tempId ";
          $result = mysqli_query($link, $query) or die (mysql_error());

          while($row = mysqli_fetch_array($result)) {

        ?>
          <div class="card m-3 ">
            <div class="card-body">
              <img class="class-img float-left clearfix mr-3" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
              <h4 class="mb-3">
                <?=$row['class']?>
              </h4>
              <p class="card-text">
                <?=$row['location']?>
              </p>
              <h6 class="card-subtitle mb-2 text-muted">
                <?=$row['date']?>
              </h6>
              <p class="card-text">
                <?=$row['description']?>
              </p>
            </div>
          </div>
          <?php } ?>
        </div>

        <?php } ?>

        <div class="card classes">
          <div class="card-body">
            <h4 class="card-title">Registered Classes</h4>
          </div>
          <?php

              // Display all register classes from user
              $query = "SELECT classes.class, classes.location, classes.date, classes.description, classes.category FROM classes INNER JOIN register ON classes.classId=register.classId";

              $result = mysqli_query($link, $query) or die (mysql_error());
              while($row = mysqli_fetch_array($result)) {

          ?>
          <div class="card m-3 ">
            <div class="card-body">
              <img class="class-img float-left clearfix mr-3" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
              <h4 class="mb-3">
                <?=$row['class']?>
              </h4>
              <p class="card-text">
                <?=$row['location']?>
              </p>
              <h6 class="card-subtitle mb-2 text-muted">
                <?=$row['date']?>
              </h6>
              <p class="card-text">
                <?=$row['description']?>
              </p>
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
          <h6><a href="mailto:">BrainTrendy@mail.com</a></h6>
          <h6><a href="tel:">956-456-7890</a></h6>
          <h6><a href="">801 N Brian<br />Mission, TX 78572</a></h6>
        </div>
        </ul>
      </div>
  </div>
  </div>
  <div class="footer-copyright text-center py-3">
    All Rights Reserved © 2016 | <a class="black" href="pp.php">Privacy Policy</a> | <a class="black" href="tos.php">Terms
      of Service</a>
  </div>
  </footer>

  </div>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="home.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>

</body>

</html>