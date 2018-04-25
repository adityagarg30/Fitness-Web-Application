<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Records</title>
</head>

<body>
<?php
	include('lib.php');
	$data=mysql_query("SELECT * FROM `member_info` where 1", $con);
	echo $data;
	echo "<table border='1'>";
	while ($row=mysql_fetch_array($data, $con))
	{
		echo "<tr>";
		echo "<td>".$row['NAME']."</td>";
		echo "<td>".$row['CONTACT NO']."</td>";
		echo "<td>".$row['EMAIL']."</td>";
		echo "<td>".$row['PASSWORD']."</td>";
		echo "<td>".$row['CITY']."</td>";
		echo '<td><img src="image/'.$row['IMAGE'].' " height="100" width="100"/></td>';
		echo '<td><a href="delete.php?id='.$row['id'].' ">Delete</a></td>';
		echo "</tr>";
		echo "<br>";
	}
	echo "</table>";

?>
</body>
</html>