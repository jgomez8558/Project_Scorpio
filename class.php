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
  <link rel="stylesheet" type="text/css" href="navbar.css">
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
      <?php if($role > 1 ) { ?>
      <li>
      <a href="/braintrendy/classform.php">Create a Class</a>
      </li>

      <?php } ?>
    </ul>
  </nav>

  
  <div id="body">
   
  <div class="jumbotron text-white font-weight-bold">
    <h1 class="display-4 font-weight-bold">Register for classes today! </h1>
    <p class="lead font-weight-bold"></p>
</div>
    
  

<div class="container">
	<div class="row" style="direction:ltl;">
  <?php 
    while($row = mysqli_fetch_array($result)){
      ?>
		<div class="card border-primary my-4 w-100 mb-1 ">
            <div class="row">
            <div class="col-md-3">
            <img id="classimg" style="max-height: 225px" class="logo" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
            </div>
            <div class="card-body text-white font-weight-bold text-center col-md-9 w-75">
            <h5 class="card-title">Class:  <?= $row['class']?></h5>
                <p class="card-text">Description:  <?= $row['description']?></p>
                <p>Location:  <?= $row['location']?></p>
                <p>Date:  <?= $row['date']?></p>
                <p>Category:  <?= $row['category']?></p>
                <a href="classinfo.php?classId=<?= $row['classId'];?>" class="btn btn-light">Classinfo</a>
            </div><!--.row-->
            </div>
    </div>
    <?php } ?>
  </div>
</div>




  
  <footer>
  <div class="centered clearfix">
    <div class="footer-logo">
      <img class="logo" src="/braintrendy/assets/logo2.png">
    </div>
    <div class="footer-contact">
       <h3><a href="">Contact</a></h3>
       <h6><a href="mailto:">BrainTrendy@mail.com</a></h6>
       <h6><a href="tel:">956-456-7890</a></h6>
       <h6><a href="">801 N Brian<br />Mission, TX 78572</a></h6><br>
    </div>
    
</footer>
<div class="footer-copyright text-center py-3 bckWht">
      All Rights Reserved © 2016 | <a class="black" href="pp.php">Privacy Policy</a> | <a class="black" href="tos.php">Terms of Service</a>
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