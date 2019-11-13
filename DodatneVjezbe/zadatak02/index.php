<?php

echo '
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" 
	  content="text/html; charset=utf-8">
</head>
<body>';

include("db_connection.php");

echo '
<br />
<br />';

$query = "SELECT sifOrgjed, nazOrgjed 
		  FROM orgjed 
		  ORDER BY nazOrgjed ASC";
$result = mysqli_query($db,$query);

if($result)
{
	while($row = mysqli_fetch_array($result))
	{
		echo '<a href="predmeti.php?sifra='.$row["sifOrgjed"].'">';
		echo $row["nazOrgjed"];
		echo '</a>';
		echo '<br />';
	}
}
else
{
	echo 'Pogreska kod SQL upita';
}		  

echo '
</body>
</html>';

?>