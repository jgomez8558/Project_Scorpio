<?php

//addcomments.php


require_once('./connection.php');

$connect = new PDO('mysql:host=localhost;dbname=testing','root',"");

$error = '';
$comment_name = '';
$comment_content = '';

if(empty($_POST["comment_name"]))
{
 $error .= '<p class="text-danger">Name is required</p>';
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $error .= '<p class="text-danger">Comment is required</p>';
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($error == '')
{
 $query = "
 INSERT INTO dbtest 
 (parent_comment_id, comment, comment_sender_name) 
 VALUES (?, ?, ?)
 ";
 
 $statement = $link->prepare($query);
 $statement->bind_param("dss", $_POST["comment_id"], $comment_content, $comment_name);
 $rc = $statement->execute();
 $error = '<label class="text-success">Comment Added</label>';
}

$data = array(
 'error'  => $error
);

echo json_encode($data);

?>
