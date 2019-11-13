<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'fakultet';

$db = mysqli_connect($server, $username, $password);

if($db)
{
	echo 'Uspjesno ste spojeni na bazu';
	echo '<br />';
	
	if(mysqli_select_db($db,$database))
	{
		echo 'Baza uspješno odabrana';
	}
	else
	{
		echo 'Pogreska kod odabira baze';
	}
}
else
{
	echo 'Doslo je do pogreske prilikom spajanj';
	echo '<br />';
}

?>