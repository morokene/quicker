<?php

include_once 'includes/db.php';

if(isSet($_POST['last_pid']))
{
$lastid=mysql_real_escape_string($_POST['last_pid']);
include('load_pin.php');
}
?>
