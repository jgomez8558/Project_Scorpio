<?php 

// Checks if user is login correctly
include('authlogin.php');

// Connects to Database
include('connection.php');

// Gets list to display the latest classes
$query = "SELECT * FROM classes ORDER BY date DESC LIMIT 5";

$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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

  <div class="banner"></div>
  <div id="body">
    <div id="hero-slides">
      <div id="header">
        <div id="logo"></div>
        <div id="menu">
          <div id="hamburger">
            <div class="slice"></div>
            <div class="slice"></div>
            <div class="slice"></div>
          </div>
        </div>
      </div>
      <div id="slides-cont">
        <div class="button" id="next"></div>
        <div class="button" id="prev"></div>
        <div id="slides">
          <?php
            // Displays the 5 latest classes
            while($row = mysqli_fetch_array($result)){
          ?>
            <div class="slide" style="background-image: url(https://alca.tv/static/u/ef5af971-fc46-4ee1-a589-980346478696_opt.png);">
              <div class="number"><?=$row['category']?></div>
              <div class="body">
                <div class="location"><?=$row['location']?></div>
                <div class="headline">Photo by Benjamin Hung</div>
                <a href="https://unsplash.com/photos/EYmhcdGuYmI" target="_blank">
                  <div class="link">View on Unsplash</div>
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
  <div class="body-text" id="dotmagic">
    <div class="wrapper">
      <h1>Shrinking Nav</h1>
      <p>Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic
        drinking vinegar skateboard chartreuse normcore tilde vice VHS. Keffiyeh pinterest everyday carry, selfies YOLO sartorial
        locavore slow-carb chambray pug echo park green juice kickstarter church-key. Deep v ethical occupy, artisan quinoa
        banjo banh mi gluten-free food truck hammock. Forage taxidermy pork belly, intelligentsia thundercats ennui chambray
        cardigan tattooed everyday carry narwhal direct trade. Seitan polaroid waistcoat tofu, post-ironic four dollar toast
        irony marfa you probably haven't heard of them typewriter stumptown photo booth humblebrag. Distillery fanny pack
        wolf, tilde keytar dreamcatcher stumptown seitan truffaut.</p>

      <p>Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic
        drinking vinegar skateboard chartreuse normcore tilde vice VHS. Keffiyeh pinterest everyday carry, selfies YOLO sartorial
        locavore slow-carb chambray pug echo park green juice kickstarter church-key. Deep v ethical occupy, artisan quinoa
        banjo banh mi gluten-free food truck hammock. Forage taxidermy pork belly, intelligentsia thundercats ennui chambray
        cardigan tattooed everyday carry narwhal direct trade. Seitan polaroid waistcoat tofu, post-ironic four dollar toast
        irony marfa you probably haven't heard of them typewriter stumptown photo booth humblebrag. Distillery fanny pack
        wolf, tilde keytar dreamcatcher stumptown seitan truffaut.</p>

      <p>Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic
        drinking vinegar skateboard chartreuse normcore tilde vice VHS. Keffiyeh pinterest everyday carry, selfies YOLO sartorial
        locavore slow-carb chambray pug echo park green juice kickstarter church-key. Deep v ethical occupy, artisan quinoa
        banjo banh mi gluten-free food truck hammock. Forage taxidermy pork belly, intelligentsia thundercats ennui chambray
        cardigan tattooed everyday carry narwhal direct trade. Seitan polaroid waistcoat tofu, post-ironic four dollar toast
        irony marfa you probably haven't heard of them typewriter stumptown photo booth humblebrag. Distillery fanny pack
        wolf, tilde keytar dreamcatcher stumptown seitan truffaut.</p>

      <p>Viral wayfarers offal vegan, gentrify kinfolk bespoke. Cronut tattooed typewriter, locavore PBR&B man braid authentic
        drinking vinegar skateboard chartreuse normcore tilde vice VHS. Keffiyeh pinterest everyday carry, selfies YOLO sartorial
        locavore slow-carb chambray pug echo park green juice kickstarter church-key. Deep v ethical occupy, artisan quinoa
        banjo banh mi gluten-free food truck hammock. Forage taxidermy pork belly, intelligentsia thundercats ennui chambray
        cardigan tattooed everyday carry narwhal direct trade. Seitan polaroid waistcoat tofu, post-ironic four dollar toast
        irony marfa you probably haven't heard of them typewriter stumptown photo booth humblebrag. Distillery fanny pack
        wolf, tilde keytar dreamcatcher stumptown seitan truffaut.</p>
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