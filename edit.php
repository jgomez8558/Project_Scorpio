<?php

    // Checks if user is login correctly
    include('authlogin.php');

    // Connects to database
    include('connection.php');


    // Edit user info based on userId
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <link rel="stylesheet" href="edit.css" />
</head>

<body id="grad">
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 p-0 m-auto">
                <div class="form card border edit">
                    <h1 class="text-center mt-4">Update Class</h1>
                    <?php
                        
                        $status = "";
                        
                        // Updates information based on user request
                        if(isset($_POST['new']) && $_POST['new']==1)
                        {
                            $id=$_REQUEST['classId'];
                            $class=$_REQUEST['class'];
                            $category=$_REQUEST['category'];
                            $location=$_REQUEST['location'];
                            $date=$_REQUEST['date'];
                            $description=$_REQUEST['description'];

                            // Creates update statement
                            $update="UPDATE classes set class='".$class."', category='".$category."', location='".$location."', date='".$date."', description='".$description."' where classId='".$id."'";

                            mysqli_query($link, $update) or die (mysql_error());
                            $status = "Data Updated. </br></br><a href='setting.php'></a>";
                            echo '<p'.$status.'</p>';

                            // Navigates back to the setting page
                            header("Location: setting.php");

                        }else{
                    ?>
                    <div class="col-lg-11 col-md-11 col-sm-12 p-0 m-auto">
                        <form name="form" method="post" action="">
                            <input type="hidden" name="new" value="1" />
                            <input name="id" type="hidden" value="<?php echo $row['classId'];?>" />
                            <p class="label">Class Name:</p>
                            <p><input type="text" name="class" placeholder="Enter New Class Name" required value="<?= $row['class'];?>" /></p>
                            <p class="label">Category:</p>
                            <p><input type="text" name="category" placeholder="Enter New Category" required value="<?= $row['category'];?>" /></p>
                            <p class="label">Location:</p>
                            <p><input type="text" name="location" placeholder="Enter New Location" required value="<?= $row['location'];?>" /></p>
                            <p class="label">Date:</p>
                            <p><input type="text" name="date" placeholder="Enter New Date" required value="<?= $row['date'];?>" /></p>
                            <p class="label">Description:</p>
                            <p><input type="text" name="description" placeholder="Enter New Description" required value="<?= $row['description'];?>" /></p>
                            <a href="setting.php"><input name="cancel" type="button" class="float-left clearfix ml-5 mb-4"
                                    value="Cancel" /></a>
                            <p><input name="submit" type="submit" class="float-right clearfix mr-5 mb-4" value="Update" /></p>
                        </form>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>