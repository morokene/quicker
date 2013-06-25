<?php
include('includes/db.php');
$path = "upload/";
$valid_formats = array("jpg", "png", "gif","JPG");
if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
 {
  $name = $_FILES['photoimg']['name'];
  $size = $_FILES['photoimg']['size'];
  if(strlen($name))
         {
	list($txt, $ext) = explode(".", $name);
	if(in_array($ext,$valid_formats))
		{
		if($size<(1024*1024))
			{
			$actual_image_name = time().substr(str_replace(" ", "_", $txt), 5).".".$ext;
			
			$tmp = $_FILES['photoimg']['tmp_name'];
			if(move_uploaded_file($tmp, $path.$actual_image_name))
				{
				$command=mysql_query("Insert into uploads(image_path,uid) values('$actual_image_name',$uid)");
				$query=mysql_query("Select id,image_path from uploads where image_path='$actual_image_name'");
				$result=mysql_fetch_array($query);
				$id=$result['id'];			
				echo "<img src='upload/".$actual_image_name."' class='preview' id='$id'>";			
			        }
			else
			echo "failed";
		}
	else
	echo "Image file size max 250k";					
          }
else
echo "Invalid file format..";	 
}
				
else
echo "Please select image..!";
				
exit;
}
?>