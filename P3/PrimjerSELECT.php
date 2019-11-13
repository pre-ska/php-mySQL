<?php
include("db_connetion.php");
$query="SELECT*FROM stud";
$result = mysqli_query($db1,$query);
//mysql_query
if($result)
{
	echo 'Upit je uspjesno izvrsen!<br/>';
	echo 'Broj redova: '.mysqli_num_rows($result).'<br/>';
}
else
	echo 'Doslo je do pogreske kod upita!<br/>';
?>