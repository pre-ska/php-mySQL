<?php
$mysqli=new mysqli('localhost','fakultet','fakultet','fakultet');
		
if(mysqli_connect_errno())
{
	echo 'Pogreška u konekciji!' ;
	echo mysqli_connect_error();
	exit();
}
$query="SELECT pbr, nazMjesto FROM mjesto WHERE nazMjesto LIKE 'Zag%'";

if($stmt = $mysqli->prepare($query))
{
	$stmt->execute();
	
	$stmt->bind_result($col1,$col2);	

	while($stmt->fetch()) 
	{
		echo $col1."-".$col2;
		echo '<br />';
		
	}
	$stmt->close();	
}

$mysqli->close();
?>