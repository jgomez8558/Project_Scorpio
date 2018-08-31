<?php
session_start();
include('connection.php');

$tempId = (string)$_SESSION['id'];
$classId = $_REQUEST['classId'];
$query = "SELECT * FROM classes WHERE userId= $tempId AND classId= $classId";
$result = mysqli_query($link, $query) or die (mysql_error());
$row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Update Class</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="edit.css"/>
    </head>
    <body id="grad">
        <div class="container-fluid mt-5">
            <div class="form card w-50 m-auto border">
                <h1 class="text-center">Update Class</h1>
                <?php
                $status = "";
                if(isset($_POST['new']) && $_POST['new']==1)
                {
                    $id=$_REQUEST['classId'];
                    $class=$_REQUEST['class'];
                    $category=$_REQUEST['category'];
                    $location=$_REQUEST['location'];
                    $date=$_REQUEST['date'];
                    $description=$_REQUEST['description'];
                    $update="UPDATE classes set class='".$class."', category='".$category."', location='".$location."', date='".$date."', description='".$description."' where classId='".$id."'";
                    mysqli_query($link, $update) or die (mysql_error());
                    $status = "Data Updated. </br></br><a href='setting.php'></a>";
                    echo '<p'.$status.'</p>';
                    header("Location: setting.php");
                }else{
                ?>
            <div >
                <form name="form" method="post" action=""> 
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['classId'];?>" />
                    <p><input type="text" name="class" placeholder="Enter New Class Name" required value="<?= $row['class'];?>" /></p>
                    <p><input type="text" name="category" placeholder="Enter New Category" required value="<?= $row['category'];?>" /></p>
                    <p><input type="text" name="location" placeholder="Enter New Location" required value="<?= $row['location'];?>" /></p>
                    <p><input type="text" name="date" placeholder="Enter New Date" required value="<?= $row['date'];?>" /></p>
                    <p><input type="text" name="description" placeholder="Enter New Description" required value="<?= $row['description'];?>" /></p>
                    <p><input name="submit" type="submit" value="Update" /></p>
                </form>
                <?php } ?>
            </div>
            </div>
        </div>
    </body>
</html>