<?php 

echo '
<html>
<head>
<meta http-equiv="content-type" 
	  content="text/html; charset=utf-8">
</head>
<body>';

include("db_connection.php");

$query = "SELECT * FROM stud WHERE imeStud LIKE 'a%'";

$result = mysqli_query($db,$query);

if($result)
{
	echo '<br />';
	echo 'SQL upit uspjesno izvrsen';
	echo '<br />';
	echo 'Dohvaceno redova:';
	echo mysql_num_rows($result);
	echo '<br />';

	while($row = mysql_fetch_array($result))
	{
		echo $row["mbrStud"];
		echo ' ';
		echo $row["prezStud"];
		echo ' ';
		echo $row["imeStud"];
		echo '<br />'; 		
	}
	
}
else
{
	echo '<br />';
	echo 'Doslo je do pogreske kod SQL upita';
}

echo '
</body>
</html>';

?>