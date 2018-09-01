<?php 

session_start();

include('connection.php');

$query = "SELECT * FROM classes ORDER BY date DESC LIMIT 5";

$result = mysqli_query($link, $query);



?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="event.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
  <link rel="stylesheet" type="text/css" href="dots.css">
  <link rel="stylesheet" href="profile.css"/>
  
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
      
        <div class="col">
          <img src="https://www.xmple.com/wallpaper/azure-cyan-gradient-linear-1920x1080-c2-56baed-56edea-a-0-f-14.svg" id="background">
         
          
        </div>
      </div>
  
  <div id="body">
    <div id="hero-slides">
      <div id="header">
        
        <div >
          <div >
            <!-- <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div> -->
          </div>
        </div>
      </div>
      <div id="slides-cont">
        <div class="button" id="next"></div>
        <div class="button" id="prev"></div>
        <div id="slides">
          <?php
            while($row = mysqli_fetch_array($result)){
          ?>
            <div class="slide" style="background-image: url(/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg);">
              <div class="number"><?=$row['category']?></div>
              <div class="body">
              <h4 class="card-title">Class:  <?= $row['class']?></h4>
                <div class="headline"></div>
                
                  <div class="link"></div>
                </a>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
      <div id="next-catch"></div>
      <div id="prev-catch"></div>
    </div>
    <div id="footer">
      <a href="" target="_blank">
        <div id="dribbble"></div>
      </a>
    </div>
  </div>

  </div>
 <!-- Container (About Section) -->
<div id="about" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>About Company Page</h2><br>
      <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <br><button class="btn btn-default btn-lg">Get in Touch</button>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>
            </div>

            <div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Our Values</h2><br>
      <h4><strong>MISSION:</strong> Our mission lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</h4><br>
      <p><strong>VISION:</strong> Our vision Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="services" class="container-fluid text-center">
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-off logo-small"></span>
      <h4>POWER</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-heart logo-small"></span>
      <h4>LOVE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB DONE</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-leaf logo-small"></span>
      <h4>GREEN</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">HARD WORK</h4>
      <p>Lorem ipsum dolor sit amet..</p>
    </div>
  </div>
</div>
  <div>
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
    <!-- <div class="footer-navigation">
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
          <li><a href="">Page Title 4</a></li> -->
        </ul>
      </div>
    </div>
  </div>
  <div class="bottom-bar">
      All Rights Reserved © 2016 | <a href="pp.php">Privacy Policy</a> | <a href="tos.php">Terms of Service</a>
  </div>
</footer>
            </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="dots.js"></script>
  <script src="home.js"></script>
  <script src="eventscroll.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>