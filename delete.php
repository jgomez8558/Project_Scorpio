<?php
include('authlogin.php');
include('connection.php');

$tempId = (string)$_SESSION['id'];
$classId = $_REQUEST['classId'];
$query = "DELETE * FROM classes WHERE userId= $tempId AND classId= $classId";
$result = mysqli_query($link, $query) or die ( mysql_error());
?>