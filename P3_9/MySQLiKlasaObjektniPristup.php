<?php
$mysqli=new mysqli('localhost','fakultet','fakultet','fakultet');
		
if(mysqli_connect_errno())
{
	echo 'Pogreška u konekciji!' ;
	echo mysqli_connect_error();
	exit();
}

$query="SELECT * FROM mjesto LIMIT 7";

if($result = $mysqli->query($query))
{
	while($row = $result->fetch_assoc())
	{
		echo $row["nazMjesto"];
		echo '<br/>';
	}
}
else
	echo 'Nema rezultata';
$mysqli->close();  //zatvara se veza prema bazi podataka
?>