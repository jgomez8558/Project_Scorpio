<?php

//fetch_comment.php

include('./connection.php');

$query = "
SELECT * FROM dbtest 
WHERE parent_comment_id = 0 
ORDER BY comment_id DESC
";

$statement = $link->prepare($query);

$statement->execute();

$result = $statement->fetch_all();


print_r($result);

$output = '';
foreach($result as $row)
{
 $output .= '
 <div class="panel panel-default">
  <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
  <div class="panel-body">'.$row["comment"].'</div>
  <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
 </div>
 ';
 $output .= get_reply_comment($link, $row["comment_id"]);
}

echo $output;

function get_reply_comment($link, $parent_id = 0, $marginleft = 0)
{
 $query = "
 SELECT * FROM dbtest WHERE parent_comment_id = '".$parent_id."'
 ";
 $output = '';
 $statement = $link->prepare($query);
 $statement->execute();
 $result = $statement->$num_rows();
 $count = $statement->rowCount();
 if($parent_id == 0)
 {
  $marginleft = 0;
 }
 else
 {
  $marginleft = $marginleft + 48;
 }
 if($count > 0)
 {
  foreach($result as $row)
  {
   $output .= '
   <div class="panel panel-default" style="margin-left:'.$marginleft.'px">
    <div class="panel-heading">By <b>'.$row["comment_sender_name"].'</b> on <i>'.$row["date"].'</i></div>
    <div class="panel-body">'.$row["comment"].'</div>
    <div class="panel-footer" align="right"><button type="button" class="btn btn-default reply" id="'.$row["comment_id"].'">Reply</button></div>
   </div>
   ';
   $output .= get_reply_comment($link, $row["comment_id"], $marginleft);
  }
 }
 return $output;
}

?>
