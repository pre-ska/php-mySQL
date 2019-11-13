<?php

echo '
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" 
	  content="text/html; charset=utf-8">
</head>
<body>';

echo '<br /><br />';

echo '<a href="index.php">Natrag</a>';

echo '<br /><br />';

include("db_connection.php");

echo '
<br />
<br />';

echo 'Naziv fakulteta: ';

	$sifra = $_GET["sifra"];

	$query = "SELECT nazOrgjed 
			  FROM orgjed 
			  WHERE sifOrgjed='$sifra'";
	$result = mysqli_query($db,$query);		  
			  
	$naziv = mysqli_fetch_array($result);		  

echo $naziv["nazOrgjed"];
echo '<br />';
echo '<br />';

// ispisuje predmete odabranog fakulteta

$query = "SELECT sifPred, nazPred 
		  FROM pred
		  WHERE sifOrgjed='$sifra'";
$result = mysqli_query($db,$query);

while($predmet = mysqli_fetch_array($result))
{
	echo '<a href="raspored.php?sifra='.$sifra.'&sifra_pred='.$predmet["sifPred"].'">';
	echo $predmet["nazPred"];
	echo '</a>';
	echo '<br />';
}


echo '
</body>
</html>';

?>