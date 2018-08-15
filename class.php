<?php 

session_start();

include('connection.php');

?>

<!DOCTYPE html>
<html>

<head>
  <title>Class</title>

 
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
        <a href="/braintrendy/home.php">Home</a>
      </li>
      <li>
        <a href="/braintrendy/class.php">Classes</a>
      </li>
      <li>
        <a href="/braintrendy/profile.php">Profile</a>
      </li>
    </ul>
  </nav>

  
  <div id="body">
    <div id="hero-slides">
      <div id="header">
        <div id="menu">
          <div id="PlayDemo">
            <div class="bun"></div>
            <div class="patty"></div>
            <div class="crisp"></div>
          </div>
        </div>
      </div>
      <div id="slides-cont">
        <div class="button" id="next"></div>
        <div class="button" id="prev"></div>
        <div id="slides">
          <div class="slide" style="background-image: url(https://alca.tv/static/u/ef5af971-fc46-4ee1-a589-980346478696_opt.png);">
            <div class="number">01</div>
            <div class="body">
              <div class="location">Shibuya, Japan</div>
              <div class="headline">Photo by Benjamin Hung</div>
              <a href="https://unsplash.com/photos/EYmhcdGuYmI" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/522d6a86-0dcf-4554-8b22-7655d65a1f66_opt.png);">
            <div class="number">02</div>
            <div class="body">
              <div class="location">Mong Kok, Hong Kong</div>
              <div class="headline">Photo by Ryan Tang</div>
              <a href="https://unsplash.com/photos/ANJHXftvvJ8" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/9b5f71cb-34a3-4fb4-a3a6-0ce9557c0acd_opt.png);">
            <div class="number">03</div>
            <div class="body">
              <div class="location">Incheon, South Korea</div>
              <div class="headline">Photo by Steve Roe</div>
              <a href="https://unsplash.com/photos/73aocAAt7rs" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/10cfd52d-e217-41e9-bb8b-ad43384a5e63_opt.png);">
            <div class="number">04</div>
            <div class="body">
              <div class="location">Wan Chai, Hong Kong</div>
              <div class="headline">Photo by Sean Foley</div>
              <a href="https://unsplash.com/photos/aPDCEoW7B78" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/b9669f2a-17fc-47dc-b6b5-3f863004efa8_opt.png);">
            <div class="number">05</div>
            <div class="body">
              <div class="location">Shibuya-ku, Japan</div>
              <div class="headline">Photo by Alex Knight</div>
              <a href="https://unsplash.com/photos/Akz00I_GGjU" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/31979576-5060-4513-aae2-b379b87e7fe6_opt.png);">
            <div class="number">06</div>
            <div class="body">
              <div class="location">Tokyo, Japan</div>
              <div class="headline">Photo by Benjamin Hung</div>
              <a href="https://unsplash.com/photos/pTn26knnKVw" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
          </div>
          <div class="slide" style="background-image: url(https://alca.tv/static/u/429b83b8-1ad4-4450-b0de-0a0c1073cf1e_opt.jpg);">
            <div class="number">07</div>
            <div class="body">
              <div class="location">Taipei City, Taiwan</div>
              <div class="headline">Photo by Jesus In Taiwan</div>
              <a href="https://unsplash.com/photos/v63B_MUiFw8" target="_blank">
                <div class="link">View on Unsplash</div>
              </a>
            </div>
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
  <div class="container-fluid">

  <div class="col">
  <div class="row">
  
    ` <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://secure.i.telegraph.co.uk/multimedia/archive/01358/students_classroom_1358062c.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">This is a class for learning javascript, html, and css.</p>
        <p>Professer : Farnsworth</p>
        <a href="classinfo.php" class="btn btn-primary">Classinfo</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://secure.i.telegraph.co.uk/multimedia/archive/01358/students_classroom_1358062c.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">This is a class for learning javascript, html, and css.</p>
        <p>Professer : Farnsworth</p>
        <a href="classinfo.php" class="btn btn-primary">Classinfo</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://secure.i.telegraph.co.uk/multimedia/archive/01358/students_classroom_1358062c.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">This is a class for learning javascript, html, and css.</p>
        <p>Professer : Farnsworth</p>
        <a href="classinfo.php" class="btn btn-primary">Classinfo</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="https://secure.i.telegraph.co.uk/multimedia/archive/01358/students_classroom_1358062c.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text">This is a class for learning javascript, html, and css.</p>
        <p>Professer : Farnsworth</p>
        <a href="classinfo.php" class="btn btn-primary">ClassInfo</a>
      </div>
    </div>

  </div>
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