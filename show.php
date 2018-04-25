<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
include ('lib.php');

	$NAME=$_POST['name'];
	$CONTACT=$_POST['no'];
	$EMAIL=$_POST['email'];
	$T_SIZE=$_POST['size'];
	$ADDRESS=$_POST['add'];
	$STATE=$_POST['state'];
	$CITY=$_POST['city'];
	$DATE_OF_BIRTH=$_POST['dob'];
	$PASSWORD=$_POST['password'];
	$IMAGE=$_FILES['image']['name'];
	
	echo $NAME;
	echo "<br>";
	echo $CONTACT;
	echo "<br>";
	echo $EMAIL;
	echo "<br>";
	echo $T_SIZE;
	echo "<br>";
	echo $ADDRESS;
	echo "<br>";
	echo $STATE;
	echo "<br>";
	echo $CITY;
	echo "<br>";
	echo $DATE_OF_BIRTH;
	echo "<br>";
	echo $PASSWORD;
	echo "<br>";
	echo $IMAGE;
	
	$data=mysql_query("INSERT INTO `member_info` (`NAME`,`CONTACT NO`,`EMAIL`,`PASSWORD`,`CITY`,`IMAGE`) VALUES ('$NAME','$CONTACT','$EMAIL','$PASSWORD','$CITY','$IMAGE')");
		if($data)
		{
			echo "<br>";
			echo "one row inserted";
		}
		
?>
</body>
</html>