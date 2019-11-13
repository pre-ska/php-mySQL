<?php
$mysqli=new mysqli('localhost','fakultet','fakultet','fakultet');
		
if(mysqli_connect_errno())
{
	echo 'Pogreška u konekciji!' ;
	echo mysqli_connect_error();
	exit();
}
$query_tpl="INSERT INTO mjesto (pbr, nazMjesto) VALUES (?,?)";

$pbr=32010;
$naziv="Vukovar";

if($stmt = $mysqli->prepare($query_tpl))
{
	$stmt->bind_param('ss',$pbr,$naziv);	

	$stmt->execute();
	
	$stmt->close();	
}
/*else
{	
	echo 'Pogreška!';
}*/
$mysqli->close();
?>