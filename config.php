<?php 
error_reporting(1);
$con = mysql_connect("127.0.0.1","root","") or die(mysql_error());
mysql_select_db("gym_db",$con) or die(mysql_error());
?>