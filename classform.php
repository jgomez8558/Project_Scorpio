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

  <form>
  Email:<br>
  <input type="text" name="email"><br>
  Phone Number:<br>
  <input type="text" name="phoneNumber"><br>
  Catagory:<br>
  <select name="cars">
    <option value="Technology">Technology</option>
    <option value="Health">Health</option>
    <option value="Art">Art</option>
    <option value="Cooking">Cooking</option>
    <option value="Music">Music</option>
  </select>
  <br>
  Location:<br>
  <input type="text" name="location"><br>
  Date:<br>
  <input type="text" name="date"><br>
  Description:<br>
  <textarea name="message" rows="10" cols="30"></textarea>
  <br>
  Images:<br>
  <input type="text" name="images"><br>
</form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>   
</html>