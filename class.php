<?php 

include('authlogin.php');

include('connection.php');

$role = (string)$_SESSION['role'];

$query = "SELECT * FROM classes";

$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Class</title>

 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="class.css">
  <link rel="stylesheet" type="text/css" href="fontcolor.css">
  <link rel="stylesheet" type="text/css" href="footer.css">
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
      <?php if($role < 1 ) { ?>
      <li>
      <a href="/braintrendy/classform.php">Create a Class</a>
      </li>

      <?php } ?>
    </ul>
  </nav>

  
  <div id="body">
   
  <div class="jumbotron">
    <h1 class="display-4">Welcome! </h1>
    <p class="lead">This is the classes page where you can sign up for any class you want.</p>
</div>
    
  

<div class="container">
	<div class="row" style="direction:ltl;">
  <?php 
    while($row = mysqli_fetch_array($result)){
      ?>
		<div class="card border-primary mb-2 w-100 mb-1">
            <div class="row">
            <div class="col-md-3">
            <img id="classimg" style="max-height: 225px" class="logo" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
            </div>
            <div class="card-body text-center col-md-9">
            <h5 class="card-title">Class:  <?= $row['class']?></h5>
                <p class="card-text">Description:  <?= $row['description']?></p>
                <p>Location:  <?= $row['location']?></p>
                <p>Date:  <?= $row['date']?></p>
                <p>Category:  <?= $row['category']?></p>
                <a href="classinfo.php?classId=<?= $row['classId'];?>" class="btn btn-primary">Classinfo</a>
            </div><!--.row-->
            </div>
    </div>
    <?php } ?>
  </div>
</div>




  
<footer>
  </footer>
  <div class="footer">
    <div id="button"></div>
  <div id="container">
  <div id="cont">
  <div class="footer_center">
  <div id="arrows">
  <i class="fas fa-arrow-down"></i>
  <footer>
  <div class="centered clearfix">
    <div class="footer-logo">
      <img class="logo" src="/braintrendy/assets/logo2.png">
      
    </div>
    <div class="footer-contact">
       <h3><a href="">Contact</a></h3>
       <ul class="footer-links">
          <li><a href="">Page Title 1</a></li>
          <li><a href="">Page Title 2</a></li>
          
        </ul>
    </div>
    <div class="footer-navigation">
      <div class="footer-links-holder">
        <h3><a href="">Legal Stuff</a></h3>
        <ul class="footer-links">
          <li><a href="tos.php">Term Of Services</a></li>
          <li><a href="pp.php">Privacy Policy</a></li>
          <li><h6>All Rights Reserved © braintrendy 2018</h6></li>
        </ul>
      </div>
      <div class="footer-links-holder">
        <h3><a href="">About Us</a></h3>
        <ul class="footer-links">
          <li><a href="">Page Title 1</a></li>
          
          
        </ul>
      </div>
      <div class="footer-links-holder">
        <h3><a href="">Social Media</a></h3>
        <ul class="footer-links">
          <li><a href=""> </a></li>
          
        </ul>
      </div>
    </div>
  </div>
  
  
     
  
</footer>
  </div>
  </div>
  </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="home.js"></script>
  <script src="eventscroll.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>