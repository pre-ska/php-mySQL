<?php 

include("db_connection.php");

$query = "SELECT * FROM stud LIMIT 1";

$result = mysqli_query($db,$query);

if($result)
{
	echo '<br />';
	echo 'SQL upit uspjesno izvrsen';
	echo '<br />';
	echo 'Dohvaceno redova:';
	echo mysqli_num_rows($result);
	echo '<br />';
	
	$row = mysqli_fetch_array($result);
	
	echo $row[0];
	echo $row["prezStud"];
	echo $row["imeStud"];
}
else
{
	echo '<br />';
	echo 'Doslo je do pogreske kod SQL upita';
}

?>