<?php
include("db_connection.php");

$ime="Pero";
$prezime="O'Hara"; //Moramo dodati znak backslash ako želimo u prezime ubaciti i znak '
//$prezime="O\'Hara"; //Moramo dodati znak backslash ako želimo u prezime ubaciti i znak '

$postRod= "10000";
$postStan= "32000";
$datR="1983-10-13";
$JMBG="1310983111114";

$ime_upis=addslashes($ime);
$prezime_upis=addslashes($prezime);

//$query = "INSERT INTO stud (imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud) 
//          VALUES ('$ime','$prezime','$postRod','$postStan','$datR','$JMBG')";

$query = "INSERT INTO stud (imeStud,prezStud,pbrRod,pbrStan,datRodStud,jmbgStud) 
		  VALUES ('$ime_upis','$prezime_upis','$postRod','$postStan','$datR','$JMBG')";

$result = mysqli_query($db1,$query);


if($result)
			echo 'Zapis je ubačen!<br />';
		else
			echo 'Doslo je do pogreske kod upisa zapisa! <br />';

/*echo '<br>';
echo $ime_upis;
echo ' ';
echo $prezime_upis;
*/
/*echo '<br>';
echo stripcslashes($ime_upis);
echo ' ';
echo stripslashes($prezime_upis);
*/
?>