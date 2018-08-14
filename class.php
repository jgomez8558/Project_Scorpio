<?php 

session_start();

include('connection.php');

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css"/>
  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="event.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="class.js"></script>
</head>
<body>
  
<nav>
    <ul>
      <li>
        <a href="/braintrendy/logout.php">Logout</a>
      </li>
      <li>
        <a href="/braintrendy/class.php">Classes</a>
      </li>
      <li>
        <a href="/braintrendy/profile.php">Profile</a>
      </li>
    </ul>
  </nav>




<section id="carousel">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <a onclick="window.open(this.href,this.target);return false;" href="profile.php" target="profile"><img class="d-block w-100" src="https://i.ytimg.com/vi/quRy-4K7EPE/maxresdefault.jpg" alt="First slide"></a>
        </div>
        <div class="carousel-item">
            <a onclick="window.open(this.href,this.target);return false;" href="profile.php" target="profile"><img class="d-block w-100" src="http://i.imgur.com/XljCklG.jpg" alt="Second slide"></a>
        </div>
        <div class="carousel-item">
            <a onclick="window.open(this.href,this.target);return false;" href="profile.php" target="profile"><img class="d-block w-100" src="https://i.ytimg.com/vi/Dq87XqrpHFA/maxresdefault.jpg" alt="Third slide"></a>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>  
  <div class="container">
    
  <div class="uk-container uk-container-medium uk-padding">
  <div class="uk-card uk-card-default uk-card-hover uk-grid-collapse uk-child-width-1-2@s uk-margin" uk-grid>
    
    <div class="uk-card-media-left uk-cover-container">
      <img src="http://codepen.vincebrown.me/assets/images/snow-mountains.jpg" alt="" uk-cover>
      <canvas width="600" height="400"></canvas>
    </div>
    <div>
      <div class="uk-card-body">
        <h3 class="uk-card-title">Media Left</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
      </div>
    </div>
  </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="class.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 </body>

</html>