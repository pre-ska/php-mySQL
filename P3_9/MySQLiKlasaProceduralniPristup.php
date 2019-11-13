<?php
$link=mysqli_connect(
		'localhost', /*host*/
		'fakultet',  /*korisničko ime*/
		'fakultet',  /*lozinka*/
		'fakultet'); /*baza*/
		
if(!$link)
{
	echo 'Pogreška u konekciji: ' ;
	echo mysqli_connect_error();
	exit;
}
else
	echo 'Uspješno spajanje na bazu';
$query="SELECT * FROM mjesto LIMIT 5";

if($result = mysqli_query($link,$query))
{
	while($row = mysqli_fetch_assoc($result))
	{
		echo $row["nazMjesto"];
		echo '<br/>';
	}
}
else
	echo 'Nema rezultata';
mysqli_close($link);
?>