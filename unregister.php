<?php

    // Checks if user is login correctly
    include('authlogin.php');

    // Connects to database
    include('connection.php');

    $tempId = (string)$_SESSION['id'];
    $classId = $_REQUEST['classId'];

    // Deletes register class from database
    $query = "DELETE FROM register WHERE userId= $tempId AND classId= $classId";
    $result = mysqli_query($link, $query) or die ( mysql_error());

    // Navigates back to setting page
    header("Location: setting.php");
    
?>