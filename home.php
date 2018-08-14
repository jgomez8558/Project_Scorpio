<?php 

session_start();

include('connection.php');

$query = "SELECT * FROM classes";

$result = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


  <link rel="stylesheet" type="text/css" href="home.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <link rel="stylesheet" type="text/css" href="event.css">

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
  <div class="body-text">
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="home.js"></script>
  <script src="eventscroll.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>

</html>