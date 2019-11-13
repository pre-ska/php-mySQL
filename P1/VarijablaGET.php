<form method="GET" action="?page=1">
</form>

<a href="VarijablaGET.php?action=edit&ID=2">Uredi</a>
<a href="VarijablaGET.php?action=delete&ID=2">Obriši</a>
<?php

echo '<pre>';
	print_r($_GET);
echo '</pre>';
/*	
switch($_GET["action"])
	{
	case 'edit':
		echo '<br/>Izabrali smo poveznicu Edit!';
	break;
	
	case 'delete':
		echo '<br/>Izabrali smo poveznicu Obriši!';
	break;
	}*/

switch($_REQUEST["action"])
	{
	case 'edit':
		echo '<br/>Izabrali smo poveznicu Edit!';
	break;
	
	case 'delete':
		echo '<br/>Izabrali smo poveznicu Obriši!';
	break;
	default: break;
	}
	
?>
