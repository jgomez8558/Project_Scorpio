<?php 

  // Checks if user is login correctly
  include('authlogin.php');

  // Checks for class submission
  if(array_key_exists("submit",$_POST)){

    // Connects to the Database
    include('connection.php');

    // Stores userId in an variable
    $tempId = (string)$_SESSION['id'];

    // Add class to the database in classes table
    $query = "INSERT INTO classes (userId, category, class, location, date, description)
              VALUES ('".mysqli_real_escape_string($link, $tempId)."',
                      '".mysqli_real_escape_string($link, $_POST['category'])."',
                      '".mysqli_real_escape_string($link, $_POST['class'])."',
                      '".mysqli_real_escape_string($link, $_POST['location'])."',
                      '".mysqli_real_escape_string($link, $_POST['date'])."',
                      '".mysqli_real_escape_string($link, $_POST['description'])."')";

          mysqli_query($link, $query);

    // Navigates to the class page once created
    if(isset($_POST['submit'])){

      header("Location: /braintrendy/class.php");
      exit;

    }
  }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Class</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="classform.css">
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-8 col-sm-12 p-0 m-auto">
        <div class="card card-container my-5 mx-3 shadow p-3 bg-white rounded">
          <form method="POST">
            Category:<br>
            <select name="category">
              <option value="Technology">Technology</option>
              <option value="Health">Health</option>
              <option value="Art">Art</option>
              <option value="Cooking">Cooking</option>
              <option value="Music">Music</option>
              <option value="Music">Miscellanious</option>
            </select>
            <br>
            Class:<br>
            <input type="text" name="class"><br>
            Location:<br>
            <input type="text" name="location"><br>
            Date:<br>
            <input type="text" name="date"><br>
            Description:<br>
            <textarea name="description" rows="10" cols="30"></textarea><br>
            <input type="submit" name="submit" value="Add Class">
            <a href="class.php"> <input type="button" class="btn btn-primary" name="return" value="Return To Classes">
            </a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</body>

</html>