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
include("db_connection2.php");

$query = "SELECT s.mbrStud 
		  FROM fakultet.stud AS s
		  ORDER BY prezStud ASC, imeStud ASC";
$result = mysqli_query($db1,$query) or die ("Query Error: ".mysqli_error());

while($row = mysqli_fetch_array($result))
{
	$mbrStud = $row["mbrStud"];

	$query_ucenik = "SELECT u.* 
					 FROM skola.ucenici AS u 
					 WHERE u.mbrStud='$mbrStud'";
	$result_ucenik = mysqli_query($db2,$query_ucenik) or die ("Query Error: ".mysqli_error());

	$ucenik = mysqli_fetch_array($result_ucenik);
	
	if($mbrStud == $ucenik["mbrStud"])
	{
		$js = 'onClick="window.open(\'predmeti.php?mbrStud='.$mbrStud.'\',\'popup\',\'location=0,status=0,scrollbars=0,width=300,height=400\');"';
	
		echo $ucenik["mbrStud"].' ';
		echo $ucenik["prezStud"].' ';
		echo $ucenik["imeStud"].' ';
		echo 'Prosjek ocjena: ';
		
			$query_ocjene = "SELECT o.ocjena 
							 FROM skola.ocjene AS o 
							 WHERE o.mbrStud='$mbrStud'";
			$result_ocjene = mysqli_query($db2,$query_ocjene) or die ("Query Error: ".mysqli_error());					
			
			$zbroj_ocjena = 0;
			$broj_ocjena  = 0;
			
			while($ocjena = mysqli_fetch_array($result_ocjene))
			{
				$zbroj_ocjena += $ocjena["ocjena"];
				$broj_ocjena++;
			}
		
			$prosjek_ocjena = $zbroj_ocjena/$broj_ocjena;
		
		echo '<a href="#" onClick="window.open(\'predmeti.php?mbrStud='.$mbrStud.'\',\'popup\',\'location=0,status=0,scrollbars=0,width=300,height=400\');">'.$prosjek_ocjena.'</a>';
		echo '<br />';
	}
}

echo '
</body>
</html>';


?>