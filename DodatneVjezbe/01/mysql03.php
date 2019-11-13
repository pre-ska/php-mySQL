<?php 

include("db_connection.php");

$query = "SELECT * FROM stud";

$result = mysql_query($query, $db);

if($result)
{
	echo '<br />';
	echo 'SQL upit uspjesno izvrsen';
	echo '<br />';
	echo 'Dohvaceno redova:';
	echo mysql_num_rows($result);
	echo '<br />';
	
	$br_rows = mysql_num_rows($result);

	for($i=1; $i<=$br_rows; $i++)
	{
		$row = mysql_fetch_array($result);
		
		echo $row[0];
		echo $row["prezStud"];
		echo $row["imeStud"];	
	}
	
}
else
{
	echo '<br />';
	echo 'Doslo je do pogreske kod SQL upita';
}

?>