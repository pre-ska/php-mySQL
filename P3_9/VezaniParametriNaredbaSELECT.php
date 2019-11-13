<?php
$mysqli=new mysqli('localhost','fakultet','fakultet','fakultet');
		
if(mysqli_connect_errno())
{
	echo 'Pogreška u konekciji!' ;
	echo mysqli_connect_error();
	exit();
}
$query_tpl="SELECT pbr FROM mjesto WHERE nazMjesto = ?";

$naziv="Vukovar";

if($stmt = $mysqli->prepare($query_tpl))
{
	$stmt->bind_param('s',$naziv);	

	$stmt->execute();

	$stmt->bind_result($pbr);

	$stmt->fetch();

	echo $pbr;

	$stmt->close();	
}
/*else
{	
	echo 'Pogreška!';
}*/
$mysqli->close();
?>