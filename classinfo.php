<?php 

  // Checks if user is login correctly
  include('authlogin.php');

  // Connects to database
  include('connection.php');

  // Collect classId from class.php and stores in a variable
  $classId = $_REQUEST['classId'];

  // Displays class based on classId
  $query = "SELECT * FROM classes WHERE classId = '".$classId."'";

  $result = mysqli_query($link, $query) or die ( mysql_error());

  $row = mysqli_fetch_array($result);

?>

<!DOCTYPE html>

<html>

<head>
  <title>Class Information</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="classform.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-12 p-0 m-auto">
        <div class="card text-center my-5 mx-3 shadow p-3 bg-white rounded">
          <div class="card-body">
            <h5 class="card-title">Class: <br>
              <?= $row['class']?>
            </h5>
            <img class="img-fluid" src="/braintrendy/assets/categoryPictures/<?= $row['category']?>.jpg">
            <p class="card-text">Description: <br>
              <?= $row['description']?>
            </p>
            <p>Location: <br>
              <?= $row['location']?>
            </p>
            <p>Date: <br>
              <?= $row['date']?>
            </p>
            <p>Category: <br>
              <?= $row['category']?>
            </p>
            <?php

              // Register for class if user submits
              if(isset($_POST['submit'])){
              $userId = (string)$_SESSION['id'];
                        
              // Creating Date
              $dt = new DateTime();
              $date =  $dt->format('Y-m-d H:i:s');

              // Add class to the database in register table
              $query = "INSERT INTO register ( classId, userId, date)
              VALUES ('".mysqli_real_escape_string($link, $classId)."',
                      '".mysqli_real_escape_string($link, $userId)."',
                      '".mysqli_real_escape_string($link, $date)."')";
              mysqli_query($link, $query);

              // Navigates to the class page once created
              header("Location: /braintrendy/class.php");
              exit;
              }

            ?>
            <form method="POST">
              <?php

              // Hides register button if user has previous register
              $querys = "SELECT * FROM register WHERE classId = '".$classId."'". "AND userId =  '".$_SESSION['id']."'";

              $results = mysqli_query($link, $querys) or die ( mysql_error());
        
              $rows = mysqli_fetch_array($results);

              // If null then hide button
              if ($rows != null){

            ?>
              <input style="display: none" type="submit" name="submit" value="submit">

              <!-- else show button -->
              <?php } else {?>

              <input type="submit" name="submit" value="Register">

              <?php }?>

              <a href="class.php"> <input name="return" type="button" class="btn btn-primary" value="Return To Classes" />
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>