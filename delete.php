<?php

    // Checks if user is login correctly
    include('authlogin.php');

    // Connects to database
    include('connection.php');

    $tempId = (string)$_SESSION['id'];
  
    $classId = $_REQUEST['classId'];

    // Deletes class from the database
    $query = "DELETE FROM classes WHERE userId= $tempId AND classId= $classId";
    $result = mysqli_query($link, $query) or die ( mysql_error());

    // Navigates back to the setting page
    header("Location: setting.php");
    
?>