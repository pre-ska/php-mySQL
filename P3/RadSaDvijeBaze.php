<?php
include("db_connetion.php");
include("db_connetion2.php");

//$query1 = "SELECT imeStud, prezStud FROM stud WHERE pbrStan=20000";
$query1 = "SELECT imeStud, prezStud FROM stud WHERE pbrStan=20000";
$result1 = mysqli_query($db1,$query1) 
or die("Došlo je do pogreške u bazi fakultet tipa: ".mysqli_errno($db1).":".mysqli_error($db1)."<br>");
//mysqli_error()
	if($result1)
	{
		$i=1;
		while($row = $result1 -> fetch_object())
		{
			echo $i.'. Ime i prezime: '.$row->imeStud.' '.$row->prezStud.'<br/>';
		$i++;
		}
	}	
	else
	{
	  echo "Upit nije uspio s pogreškom: ".mysqli_error($db1)."<br>";
	}
echo "__________________________________________________ <br>";

//$query2 = "SELECT imeStud, prezStud FROM ucenici WHERE pbrStan=20000";
$query2 = "SELECT imeStudent, prezStud FROM ucenici WHERE pbrStan=20000";
$result2 = mysqli_query($db2,$query2)
or die("Došlo je do pogreške u bazi skola tipa: ".mysqli_errno($db2).":".mysqli_error($db2)."<br>");

		
	if($result2)
	{
		$i=1;
		while($row2 = $result2 -> fetch_object())
		{
			echo $i.'. Prezime, ime: '.$row2->prezStud.', '.$row2->imeStud.'<br>';
		$i++;
		}
	}
	else
	{
	  echo "Upit nije uspio s pogreškom: ".mysqli_error($db2). "<br>";
	}
?>