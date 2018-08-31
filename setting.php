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
      <link rel="stylesheet" href="navbar.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
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
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col">
            <img src="https://www.xmple.com/wallpaper/azure-cyan-gradient-linear-1920x1080-c2-56baed-56edea-a-0-f-14.svg" id="background">
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
                    <p><input type="text" name="fname" placeholder="Enter New First Name" required value="<?= $row['firstName'];?>" /></p>
                    <p class="mb-1">Last Name</p>
                    <p><input type="text" name="lname" placeholder="Enter New Last Name" required value="<?= $row['lastName'];?>" /></p>
                    <p class="mb-1">Address:</p>
                    <p><input type="text" name="address" placeholder="Enter New Address" required value="<?= $row['address'];?>" /></p>
                    <p class="mb-1">Phone:</p>
                    <p><input type="text" name="phone" placeholder="Enter New Phone Number" required value="<?= $row['phone'];?>" /></p>
                    <p class="mb-1">Email:</p>
                    <p><input type="text" name="email" placeholder="Enter New Email" required value="<?= $row['email'];?>" /></p>
                  </div>
                </div>
              </div>
            </div>
            <a href="profile.php"><input name="cancel" type="button" class=" btn btn-primary cancel mt-5" value="Cancel" /></a>
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
                <a href="edit.php?classId=<?=$row['classId'];?>"> <input name="edit" type="button" class="btn btn-primary" value="Edit"/> </a>
                <a href="delete.php?classId=<?=$row['classId'];?>"> <input name="delete" type="button" class="btn delete" value="Delete"/></a>
              </div>
            </div>
            <?php } ?>
            <button type="button" class="btn btn-success">+</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
    <script src="home.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/gsap/1.18.2/TweenMax.min.js"></script>
  </body>
</html>