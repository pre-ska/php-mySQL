<?php
include("db_connetion.php");

$query = "SELECT imeStud, prezStud FROM stud 
			WHERE pbrStan=10000 LIMIT 0, 5";

$result = mysqli_query($db1,$query);

echo '
<table border="1">
	<tr>
		<td>IME</td>
		<td>PREZIME</td>
	</tr>';

while($row=mysqli_fetch_array($result))
{
	echo ' <tr>
		<td>'.$row["imeStud"].'</td>
		<td>'.$row["prezStud"].'</td>
	</tr>';
}

echo ' 
	</table>';

?>