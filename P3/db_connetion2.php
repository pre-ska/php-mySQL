<?php

$server   = 'localhost';
$username = 'skola';
$password = 'skola123';
$database = 'skola';

$db2 = mysqli_connect($server,$username,$password);

if($db2)
{
	echo 'Uspjesno ste spojeni na bazu podataka skola!';
	echo '<br />';
	$db_selected=mysqli_select_db($db2,$database);
		
		if($db_selected)
			echo 'Baza podataka skola je uspješno odabrana!<br />';
		else
			echo 'Doslo je do pogreske kod odabira baze podataka skola! <br />';
}
else
{
	echo 'Doslo je do pogreske prilikom spajanja na bazu podataka skola!  <br />';
}

?>