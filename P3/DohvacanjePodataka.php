<?php
include("db_connetion.php");

 $query = "SELECT imeStud, prezStud FROM stud 
			WHERE pbrStan=10000 LIMIT 0, 5";

/*$query = "SELECT imeStud AS ime, prezStud AS prezime FROM stud 
			WHERE pbrStan=10000 LIMIT 0, 5";

*/
$result = mysqli_query($db1,$query);

while($row=mysqli_fetch_row($result))
{
	echo 'ime: '.$row[0].' prezime: '.$row[1].'<br/>';
}
/*while($row=mysqli_fetch_array($result))
{
	echo 'ime: '.$row["imeStud"].' prezime: '.$row[1].'<br/>';
}*/
/*while($row=mysqli_fetch_assoc($result))
{
	echo ' ime: '.$row["imeStud"];
	echo ' prezime: '.$row["prezStud"];
}
*/

/*while($row=mysqli_fetch_object($result))
{
	echo ' ime: '.$row->ime;
	echo ' prezime: '.$row->prezime;
}*/



?>