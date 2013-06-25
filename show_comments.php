<?php

$command="select * from comments where pid_fk=$pid";
$comm_result=mysql_query($command);
while($cdata=mysql_fetch_row($comm_result))
{
echo "<div class='comment_area'>";
echo "<div class='comment_user'><img src='http://www.gravatar.com/avatar/a422402df9e5dc54fab6e8131dd19fd0?s=30' /></div>";
echo "<div class='commentbody'><a href='#'><b>Abhishek Ahlawat</b></a> $cdata[1]</div></div>";
}
?>