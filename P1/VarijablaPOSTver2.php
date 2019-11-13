<form method="POST" action="obrada.php">
ime:<br/><input type="text" name="ime" value="" /><br/>
prezime:<br/><input type="text" name="prezime" value="" /><br/>
<br/>
spol:<br/>
<input type="radio" name="spol" value="M" />musko<br/>
<input type="radio" name="spol" value="Ž" />zensko<br/>
<br/>
zupanija:<br/>
<select name="zupanija">
	<option value="1">Grad Zagreb</option>
	<option value="2">Zagrebacka zupanija</option>
</select>
<br/>
<br/>
interesi:<br/>
<?php
/*<input type="checkbox" name="interesi" value="1" />sport<br/>
<input type="checkbox" name="interesi" value="2" />muzika<br/>
<input type="checkbox" name="interesi" value="3" />racunala<br/>*/
//$_POST['interesi']=array();
$interesi=array('1'=>'sport','2'=>'muzika','3'=>'racunala','4'=>'automobili');

foreach($interesi as $key =>$val)
{
	echo '<input type="checkbox" name="interesi[]" value="'.$val.'"  />'.$val.'<br/>';
}
?>
<br/>
napomena:<br/>
<textarea name="napomena" cols="50"></textarea>
<br/>
<br/>
<input type="submit" name="submit_btn" value="Obrada" />

<?php
if(isset($_POST["submit_btn"]))
{
	echo '<pre>';
	print_r($_POST);
	echo '</pre>';
}

echo 'Korisnikovi interesi:';

/*foreach($_POST["interesi"] as $v)
{
	echo '<br/>' .$interesi[$v] ;
}*/
?>
</form>