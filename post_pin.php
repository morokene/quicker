<?php
include("includes/db.php");

if($_POST)
{
$pin=$_POST['pin'];
$pin=mysql_real_escape_string("$pin");

$upload_id=$_POST['z'];


$sql_query = "INSERT INTO pins(pin,upload_id,uid) VALUES ('$pin',$upload_id,$uid)";
$sql_result=mysql_query($sql_query);

$newquery="SELECT * from pins order by pid desc limit 1";
$newresult = mysql_query($newquery);

while($data=mysql_fetch_row($newresult))
{

$pid=$data[0];
$pin=$data[1];
echo "<div class='box col2' id='box$pid'>";
echo "<div class='pin_holder'>";
echo "<div class='data'>";
$upload_id=$data[2];

if($upload_id)
{
$img_query=mysql_query("Select image_path from uploads where id=$upload_id");
$result=mysql_fetch_array($img_query);
$img_path=$result['image_path'];
echo "<div style='margin-bottom:5px;'><img src='upload/$img_path' class='pin_image'></div>";
echo "<div class=message>$pin</div></div>";
}
else
{
echo "<div class=message><b>$pin</b></div></div>";
}
echo "</div>";

?>
<div style='margin-right:10px;'><a href='#' class='' id=<?php echo $pin; ?>>TRUE</a></div>
<?php
}
}
?>
<div class='commentpost' style='display:none;' id='commentbox<?php echo $pid;?>'>
<div class='commentbox_area'>
<form method="post" action="">
<textarea name="comment" class="comment" maxlength="200"  id="ctextarea<?php echo $pid;?>" placeholder="Add a comment..."></textarea>
<br/>
<input type="submit"  value=" Comment "  id="<?php echo $pid;?>" class="comment_button"/>
</form>
</div>
</div>
