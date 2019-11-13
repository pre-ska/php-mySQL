<?php

echo '
<html>
<head>
<meta http-equiv="content-type" 
	  content="text/html; charset=utf-8">
</head>
<body>';

include("db_connection.php");

echo '<br />';
echo '<br />';
echo '<br />';

$slova = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "R", "S", "T", "U", "V", "Z");

foreach($slova as $k => $l)
{
	echo '<a href="index.php?letter='.$l.'">'.$l.'</a> | ';
}

echo '<br />';
echo '<br />';

if(isset($_GET["letter"]))
{
	$s = $_GET["letter"];
}
else
{
	$s = "A";
}

$query = "SELECT
		  mjesto.pbr,
		  mjesto.nazMjesto, 
		  mjesto.sifZupanija,
		  zupanija.nazZupanija
		  FROM 
		  mjesto,
		  zupanija			  
		  WHERE mjesto.nazMjesto LIKE '$s%'
		  AND zupanija.sifZupanija = mjesto.sifZupanija
		  ORDER BY mjesto.nazMjesto ASC";
$result = mysqli_query($db,$query);

if($result)
{
	echo 'Dohvacena su mjesta';
	echo '<br />';
	echo 'Broj mjesta:';
	echo mysqli_num_rows($result);
	echo '<br />';
	echo '<br />';
	
	while($row = mysqli_fetch_array($result))
	{
		echo '<b>'.$row["nazMjesto"].'</b>';
		echo '<br />';
		echo '<i>Županija: '.$row["nazZupanija"].'</i>';
		echo '<br />';
		echo '<i>Broj rođenih studenata:</i>';
		
		$query_rod = "SELECT COUNT(mbrStud)
					  FROM stud
					  WHERE pbrRod='".$row["pbr"]."'";
		$result_rod = mysqli_query($db,$query_rod);
		
		list($br_rod) = mysqli_fetch_array($result_rod);
				
		echo $br_rod;
		
		echo '<br />';
		echo '<i>Broj žitelji:</i>';
		
		$query_zit = "SELECT COUNT(mbrStud)
					  FROM stud
					  WHERE pbrStan='".$row["pbr"]."'";
		$result_zit = mysqli_query($db,$query_zit);
		
		list($br_zit) = mysqli_fetch_array($result_zit);
		
		echo $br_zit;
		
		if($br_zit == 0)
		{
			echo '<br />';
			echo 'Nitko ne živi u ovom mjestu';
		}
		else
		{
			$query_god = "
			SELECT 
			MAX(YEAR(NOW()) - YEAR(datRodStud)) AS godine 
			FROM stud 
			WHERE pbrStan='".$row["pbr"]."'";

			list($g) = mysqli_fetch_array(mysqli_query($db,$query_god));
		
			echo '<br />';
			echo '<i>Godina najstariji: '.$g.'</i>';
			echo '<br />';

			$query_god = "
			SELECT 
			MIN(YEAR(NOW()) - YEAR(datRodStud)) AS godine 
			FROM stud 
			WHERE pbrStan='".$row["pbr"]."'";

			list($g) = mysqli_fetch_array(mysqli_query($db,$query_god));			
			
			echo '<i>Godina najmlađi: '.$g.'</i>';			
		}
		
		echo '<br />';
		echo '<br />';
	}
}
else
{
	echo 'Doslo je do pogreske kod SQL upita';
}




echo '
</body>
</html>';

?>