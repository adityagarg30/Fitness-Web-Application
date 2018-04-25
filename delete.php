<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	include('lib.php');
	$id=$_POST['id'];
	echo $id;
	
	$data=mysql_query("DELETE FROM `member_info` WHERE `id`='$id' ");
	if($data)
	{
		//echo "one row deleted";
		header('location:view.php');
	}
	else
	{
		echo mysql_error();
	}

?>
</body>
</html>