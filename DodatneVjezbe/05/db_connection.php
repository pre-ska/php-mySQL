<?php

$server   = 'localhost';
$username = 'root';
$password = '';
$database = 'fakultet';

$db1 = mysqli_connect($server, $username, $password);

if($db1)
{
	echo 'Uspjesno ste spojeni na bazu';
	echo '<br />';
	
	if(mysqli_select_db($db1,$database))
	{
		echo 'Baza uspješno odabrana';
		mysqli_query($db1,"SET NAMES utf8");
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

echo '<br />';
echo '<br />';

?>