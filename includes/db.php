<?php

//$session_start();
//$SESSION["uid"]=$uid;

$uid=1; //Using constant user id


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'swordfish');
define('DB_DATABASE', 'quick');
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die(mysql_error());
$database = mysql_select_db(DB_DATABASE) or die(mysql_error());

?>
