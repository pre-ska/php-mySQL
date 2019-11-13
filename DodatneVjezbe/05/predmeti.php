<?php

echo '
<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<meta http-equiv="content-type" 
	  content="text/html; charset=utf-8">
</head>
<body>

<a href="index.php">Natrag</a>

<br />
<br />';

include("db_connection2.php");

$mbrStud = $_GET["mbrStud"];

$query = "SELECT ocjene.ocjena, pred.nazPred
		  FROM ocjene, pred 
		  WHERE ocjene.mbrStud = '$mbrStud'
		  AND pred.sifPred = ocjene.sifPred";
		  
$result = mysqli_query($db2,$query) or die ("Query Error: ".mysql_error());	

while($pred = mysqli_fetch_array($result))
{
	echo $pred["nazPred"].' ';
	echo $pred["ocjena"];
	echo '<br />';
}	  

echo '
</body>
</html>';

?>