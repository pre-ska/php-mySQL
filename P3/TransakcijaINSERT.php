<?php
include("db_connetion.php");
$error_num=0;

$query="BEGIN";
$result = mysqli_query($db1,$query);

$query = "INSERT INTO mjesto(pbr, nazMjesto, sifZupanija) VALUES ('23000','Zadar', 13)";
$result = mysqli_query($db1,$query); 

if(!$result)
	$error_num++;

$query = "INSERT INTO mjesto(pbr, nazMjesto, sifZupanija) VALUES ('51000','Rijeka', 8)";
$result = mysqli_query($db1,$query);

if(!$result)
	$error_num++;

$query = "INSERT INTO mjesto(pbr, nazMjesto, sifZupanija) VALUES ('10000','Zagreb', 21)";
$result = mysqli_query($db1,$query);

if($error_num<=0);
	$query="COMMIT";
else
	$query="ROLLBACK";


$result = mysqli_query($db1,$query);	

?>