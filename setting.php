<?php
// Checks if user is login correctly
include('authlogin.php');

include('connection.php');

$tempId = (string)$_SESSION['id'];
$query = "SELECT * FROM profile WHERE userId= $tempId";
$result = mysqli_query($link, $query) or die (mysql_error());
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <title>Setting</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" href="setting.css"/>
  </head>
    <body>
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col">
            <img src="https://dz2cdn4.dzone.com/storage/rc-covers/8757499-recardheader90.png" id="background">
            <img src="https://img.deusm.com/darkreading/DR-user.jpg" id="user">
            <h2 class="name"> <?=$row['firstName']?> <?=$row['lastName']?> </h2>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-lg-4 col-md-4 col-sm-12 p-0 mx-auto">
            <div class="card about">
              <div class="card-body">
                <h4 class="card-title">About</h4>
                  <div class="form text-center">
                    <?php
                    $status = "";
                    if(isset($_POST['new']) && $_POST['new']==1)
                    {
                    $id=$_REQUEST['id'];
                    $fname=$_REQUEST['fname'];
                    $lname=$_REQUEST['lname'];
                    $address=$_REQUEST['address'];
                    $phone=$_REQUEST['phone'];
                    $email=$_REQUEST['email'];
                    $update="UPDATE profile SET firstName='".$fname."', lastName='".$lname."', address='".$address."', phone='".$phone."', email='".$email."' WHERE userId='".$tempId."'";
                    mysqli_query($link, $update) or die (mysql_error());
                    $status = "Data Updated.";
                    header("Location: profile.php");
                    }else{
                    ?>
              <div>
                  <form name="form" method="post" action=""> 
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['id'];?>" />
                    <p class="mb-1">First Name:</p>
                    <p><input type="text" name="fname" placeholder="Enter New Class Name" required value="<?= $row['firstName'];?>" /></p>
                    <p class="mb-1">Last Name</p>
                    <p><input type="text" name="lname" placeholder="Enter New Category" required value="<?= $row['lastName'];?>" /></p>
                    <p class="mb-1">Address:</p>
                    <p><input type="text" name="address" placeholder="Enter New Location" required value="<?= $row['address'];?>" /></p>
                    <p class="mb-1">Phone:</p>
                    <p><input type="text" name="phone" placeholder="Enter New Date" required value="<?= $row['phone'];?>" /></p>
                    <p class="mb-1">Email:</p>
                    <p><input type="text" name="email" placeholder="Enter New Description" required value="<?= $row['email'];?>" /></p>
                  </div>
                </div>
              </div>
            </div>
            <a href="profile.php"><button type="button" class="btn btn-primary cancel mt-5">Cancel</button></a>
            <input name="submit" type="submit" class=" btn btn-primary save mt-5" value="Save" />
            </form>
          <?php } ?>
        </div>
        <div class="col-lg-8 col-md-8 col-sm-12 p-0 m-auto">
          <div class="card classes">
            <div class="card-body">
              <h4 class="card-title">Classes</h4>
            </div>
            <?php
              $query = "SELECT * FROM classes WHERE userId= $tempId ";
              $result = mysqli_query($link, $query) or die (mysql_error());
              while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="card m-3 ">
              <div class="card-body">
              <h5 class="card-title"><?=$row['class']?></h5>
                <p class="card-text"><?=$row['location']?></p>
                <h6 class="card-subtitle mb-2 text-muted"><?=$row['date']?></h6>
                <p class="card-text"><?=$row['description']?></p>
                <a href="edit.php?classId=<?=$row['classId'];?>"> <button type="button" class="btn btn-primary">Edit</button> </a>
                <a href="delete.php?classId=<?=$row['classId'];?>"> <button type="button" class="btn btn-danger">Delete</button> </a>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>
      </div>
    </div>
  </body>
</html>