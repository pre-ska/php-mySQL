<?php
setcookie('naziv','12345',time() + 10);
echo $_COOKIE["naziv"];
print_r($_COOKIE);

function setcookielive($name, $value='', $expire)
{
	$_COOKIE[$name]=$value;
	return setcookie($name,$value,$expire);
}
setcookielive('naziv','Algebra2',time()+10);

echo $_COOKIE["naziv"];
//print_r($_COOKIE);

?>