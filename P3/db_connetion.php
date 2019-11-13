<?php

$server   = 'localhost';
$username = 'fakultet';
$password = 'fakultet';
$database = 'fakultet';

$db1 = mysqli_connect($server,$username,$password);

if($db1)
{
	echo 'Uspjesno ste spojeni na bazu podataka!';
	echo '<br />';
	$db_selected=mysqli_select_db($db1,$database);
		
		if($db_selected)
			echo 'Baza podataka je uspješno odabrana!<br />';
		else
			echo 'Doslo je do pogreske kod odabira baze podataka! <br />';
}
else
{
	echo 'Doslo je do pogreske prilikom spajanja na bazu podataka! <br />';
}

?>