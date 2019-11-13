<?php
include("db_connetion.php");
/*$query = "INSERT INTO stud";
$query .="(mbrStud,imeStud,prezStud,pbrRod,pbrStan,";
$query .="(datRodStud,jmbgStud)";

$query .="VALUES";
$query .="('Ivan','Ivić','10000','10000',";
$query .="('1983-10-13','1310983111111')";
*/
 $query = "INSERT INTO stud (imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud) 
 VALUES ('Ivan','Ivić','10000','10000','1983-10-13','1310983111111')";

$result = mysqli_query($db1,$query);

if($result)
{
	echo 'INSERT zapisa je uspjesno izvrsen!<br/>';
	//echo 'Broj redova: '.mysqli_num_rows($result).'<br/>';
}
else
	echo 'Doslo je do pogreske kod INSERT-a zapisa!<br/>';
?>