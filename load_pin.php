<?php
if(isset($lastid))
{
	$lastid=$lastid;
	$loadmore="WHERE pid<'$lastid'";
}
else
{
	$lastid=0;
	$loadmore='';
}

$pin_total = mysql_query("SELECT * from pins");
$pin_count= mysql_num_rows($pin_total);

?>

<div id="container" class="row">
 
<?php

$sql="select * from pins $loadmore order by pid DESC LIMIT 10";
$result=mysql_query($sql);

while($row=mysql_fetch_row($result))
{
	$pid=$row[0];
	$message=$row[1];

?>
	
	<div class='box col2' id='box<?php echo $pid; ?>'>
	
		<div class='pin_holder'>
			<div class='data'>
				<div class=message><b><?php echo $message; ?></b></div>
			</div>
		</div>
		
		<div style='margin-right:10px;'><a href='#' class='' id=<?php echo $pid; ?>>TRUE</a></div>
		
	</div>

<?php
		
}

?>

</div> <!-- #container -->

<?php
if($pin_count > 10)
{
	echo "<br><div id='more$pid' class='morebox'>";
	echo "<a href='#' class='more' id='$pid'>More..</a>";
	echo "</div>";
}
 else
{
	echo "<br><div id='more$pid' class='morebox'>";
	echo "</div>";
}
 
?>