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

echo '<a href="predmeti.php?sifra='.$_GET["sifra"].'">Natrag</a>';

echo '<br /><br />';

include("db_connection.php");

echo '<br /><br />';

echo 'Naziv fakulteta : ';

	$sifra = $_GET["sifra"];

	$query = "SELECT nazOrgjed 
			  FROM orgjed 
			  WHERE sifOrgjed='$sifra'";
	$result = mysqli_query($query);		  
			  
	$naziv = mysqli_fetch_array($result);		  

echo $naziv["nazOrgjed"];

echo '<br /><br />';

echo 'Naziv predmeta : ';

	$sifra_pred = $_GET["sifra_pred"];

	$query = "SELECT nazPred 
			  FROM pred 
			  WHERE sifPred='$sifra_pred'";
	$result = mysqli_query($query);		  
			  
	$naziv = mysqli_fetch_array($result);		  

echo $naziv["nazPred"];

echo '<br /><br />';

$query_rez = "SELECT * FROM rezervacija WHERE sifPred = '$sifra_pred'";
$result_rez = mysqli_query($query_rez);

while($row = mysqli_fetch_array($result_rez))
{
	switch($row["oznVrstaDan"])
	{
		case 'PO':
			echo 'Ponedjeljak';
		break;
		
		case 'UT':
			echo 'Utorak';
		break;
		
		case 'SR':
			case 'Srijeda';
		break;
		
		case 'CE':
			echo 'Četvrtak';
		break;
		
		case 'PE':
			echo 'Petak';
		break;
	}
	
	
	echo ' ';
	echo $row["sat"].':00';
	echo ' ';
	echo 'Dvorana: '.$row["oznDvorana"].'';
	
		$query_dvor = "SELECT kapacitet 
					   FROM dvorana 
					   WHERE oznDvorana='".$row["oznDvorana"]."'";
		list($kapacitet) = mysqli_fetch_array(mysql_query($query_dvor));

	echo ' (Kapacitet: '.$kapacitet.')';
	echo '<br />';
}


 

echo '
</body>
</html>';

?>