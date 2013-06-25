<?php
include("includes/db.php");

if($_POST)
{

$comment=$_POST['comment'];
$pid=$_POST['pid'];

$query = "INSERT INTO comments(comment,pid_fk,uid) VALUES ('$comment','$pid',$uid)";
$result=mysql_query($query);

echo "<div class='comment_area'>";
echo "<div class='comment_user'><img src='http://www.gravatar.com/avatar/a422402df9e5dc54fab6e8131dd19fd0?s=30' /></div>";
echo "<div class='commentbody'><a href='#'><b>Abhishek Ahlawat</b></a> $comment</div></div>";


}

?>