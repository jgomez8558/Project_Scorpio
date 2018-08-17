<?php
session_start();
include('connection.php');

$tempId = (string)$_SESSION['id'];
$query = "SELECT * FROM profile WHERE userId= $tempId ";
$result = mysqli_query($link, $query) or die (mysql_error());
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Settings</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="setting.css" />
  </head>
  <body>
    <div class="container-fluid p-0">
      <div class="row">
      <?php
      while($row = mysqli_fetch_assoc($result)){
      ?>
        <div class="col">
          <img src="https://dz2cdn4.dzone.com/storage/rc-covers/8757499-recardheader90.png" id="background">
          <i class="fas fa-pen-alt edit"></i>
          <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
          <h2 class="name"> <?=$row['firstName']?> <?=$row['lastName']?> 
            <i class="fas fa-pen-alt"></i>
          </h2>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-lg-4 col-md-4 col-sm-12 p-0 mx-auto">
          <div class="card about">
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col">
                    <h6>First Name:</h6>
                    <input type="text" class="form-control" placeholder=<?=$row['firstName']?>>
                  </div>
                  <div class="col">
                  <h6>Last Name:</h6>
                    <input type="text" class="form-control" placeholder=<?=$row['lastName']?>>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                  <h6>Address:</h6>
                    <input type="text" class="form-control" placeholder=<?=$row['address']?>>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                    <h6>Phone Number:</h6>
                    <input type="text" class="form-control" placeholder=<?=$row['phone']?>>
                  </div>
                </div>
                <div class="row mt-2">
                  <div class="col">
                  <h6>E-mail:</h6>
                    <input type="text" class="form-control" placeholder=<?=$row['email']?>>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <a href="profile.php"> <button type="button" class="btn btn-primary mt-3 cancel">Cancel</button> </a>
          <button type="button" class="btn btn-primary mt-3 save">Save</button>
        </div>
        <?php } ?>
        <div class="col-lg-8 col-md-8 col-sm-12 p-0 m-auto">
          <div class="card classes">
            <div class="card-body">
              <h5 class="card-title">Classes</h5>
            </div>
            <?php
              $query = "SELECT * FROM classes WHERE userId= $tempId ";
              $result = mysqli_query($link, $query) or die (mysql_error());
              while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="card m-3">
              <div class="card-body">
                <h5 class="card-title"><?=$row['class']?>
                </h5>
                <p class="card-text"><?=$row['location']?></p>
                <h6 class="card-subtitle mb-2 text-muted"><?=$row['date']?></h6>
                <p class="card-text"><?=$row['description']?></p>
                <a href="edit.php?classId=<?=$row['classId'];?>"> <button type="button" class="btn btn-primary">Edit</button> </a>
                <a href="delete.php?classId=<?=$row['classId'];?>"> <button type="button" class="btn btn-danger">Delete</button> </a>
              </div>
            </div>
              <?php } ?>
              <button type="button" class="btn btn-success"><i class="fas fa-plus"></i></button>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>


