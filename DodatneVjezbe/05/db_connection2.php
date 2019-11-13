<?php

$server2   = 'localhost';
$username2 = 'root';
$password2 = '';
$database2 = 'skola';

$db2 = mysqli_connect($server2, $username2, $password2);

if($db2)
{
	echo 'Uspjesno ste spojeni na bazu';
	echo '<br />';
	
	if(mysqli_select_db($db2,$database2))
	{
		echo 'Baza uspjesno odabrana';
		mysqli_query($db2,"SET NAMES utf8");
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