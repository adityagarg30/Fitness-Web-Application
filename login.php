<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
if($_POST['submit']){
include('lib.php');
$email=$_POST['email'];
$password=$_POST['password'];
$data=mysql_query("SELECT * FROM `member_info` WHERE `EMAIL`='$email'");	
	
$row=mysql_fetch_array($data);
$num_rows=mysql_num_rows($data);
if($num_rows>0){
		
if($row['PASSWORD']==$password){
			
//echo "Welcome user";
//$_SESSION['id']=$row['id'];
//$_SESSION['email']=$row['email'];
header('location:profile.php');
			
}
else
{
echo "Incorrect pass";
}
}
else
{
echo "email doesnot exist";
}
}
else
{
header('location:test.php');
}	
?>
</body>
</html>