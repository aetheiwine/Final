<?php    

$username="root";
$password="";
$database="trial";
mysql_connect("localhost",$username,$password);
mysql_select_db($database) or die( "Unable to select database");

$query= "SELECT * FROM trials";

$result=mysql_query($query);

mysql_close();

?>