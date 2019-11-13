<form method="POST" action="">

<title>Pretrazivanje</title>
 <table>
	<tr>
	<th>ID Korisnika:</th>
	<td><input type="text" name="id_" value="" /></td>
	</tr>
	
 </table>
 
			<tr><th></th><td><input type="submit" name="btnSub" value="Traži"/></td></tr>
</form>	
<?php
	include "db_connection.php";


$R_br=$_POST['id_'];


//txtUserId = getRequestString("R_br");
//$query = "SELECT * FROM korisnici WHERE id = ".$R_br;


if($R_br)
{
	//$query="SELECT * FROM korisnici WHERE UserId = ".$R_br;
//echo $R_br;
//$query="SELECT id, ime AS imeKorisnika, email, datRod, oib FROM korisnici WHERE id = '$R_br'";
$query = "SELECT id, ime AS imeKorisnika, email, datRod, oib FROM korisnici WHERE id = ".$R_br";
$result = mysqli_query($db,$query);
$row=mysqli_fetch_object($result);
	
	echo 'ime: '.$row->imeKorisnika.'<br/>';

}
/*if($result)
{
echo '<pre>';
print_r($_POST);
echo '</pre>';
$row=mysqli_fetch_object($result);
	
	echo 'ime: '.$row->ime.'<br/>';
}
else 
	echo 'Greška';

}
*/

?>
