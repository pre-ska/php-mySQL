<?php
include("db_connetion.php");

$query = "SELECT * FROM stud WHERE pbrStan=10000";
$result = mysqli_query($db1,$query); 
$br_result=mysqli_affected_rows($db1);
if($br_result<=0)
	echo 'Ne postoji niti jedan rezultat! ' ;
else
	echo 'Broj pronadjenih zapisa: '.$br_result;

?>