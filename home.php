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
          while ($row = mysqli_fetch_array($result)) {
            ?>
            <div class="slide" style="background-image: url(/braintrendy/assets/categoryPictures/<?= $row['category'] ?>.jpg);">
              <div class="number"><?= $row['category'] ?></div>
              <div class="body">
                <div class="location"><?= $row['location'] ?></div>
                <div class="headline"></div>
                
                  <div class="link"></div>
                </a>
              </div>
            </div>
          <?php 
        } ?>
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
      <h2>About Company</h2><br>
      <h4>A marketplace for learning and teaching locally and online. Students learn new skills and career goals taught by experts and professionals in their respective fields who want to develop their teaching skills.</h4><br>
      
      <br>
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
      <h4><strong>MISSION:</strong>Providing alternative routes of education for our students, in order to effect the best treatment available for all of the individuals and families whose lives may someday be touched by those who have come to us for their education and training.</h4><br>
      <p><strong>VISION:</strong> <br>
        – Offer a dynamic, interactive education environment that engages students in the learning process<br>
        – Provide constructive feedback to promote student self- assessment and motivation<br>
        – Provide clear learning outcomes, detailed instruction, and assessment for all courses to ensure course mastery and student success
        <br>
        – Use technology to create effective modes and means of instruction that expand access to learning
    </p>
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
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>JOB Leads</h4>
      <p>Assistance in job search</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFIED</h4>
      <p>Classes offer certification</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-wrench logo-small"></span>
      <h4 style="color:#303030;">Community Outreach</h4>
      <p>Get connected with your community</p>
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
       <h6><a href="mailto:">BrainTrendy@mail.com</a></h6>
       <h6><a href="tel:">956-456-7890</a></h6>
       <h6><a href="">801 N Brian<br />Mission, TX 78572</a></h6>
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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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