<?php

session_start();

$_SESSION["var1"]=1254;
$_SESSION["var2"]="Algebra";

echo $_SESSION["var1"].'</br>';
echo $_SESSION["var2"].'</br>';

$v1=$_SESSION["var1"];
$v2=$_SESSION["var2"];

echo $v1.'</br>';
echo $v2.'</br>';

$_SESSION["brojevi"]=array(1,5,6,7,8);

foreach($_SESSION["brojevi"] as $key=>$val)
{
	echo $key.'->';
	echo $val.'</br>';
	
}
session_destroy();
?>