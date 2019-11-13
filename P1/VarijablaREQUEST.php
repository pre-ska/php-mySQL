<form method="REQUEST" action="">
</form>

<a href="VarijablaREQUEST.php?action=edit&ID=2">Uredi</a>
<a href="VarijablaREQUEST.php?action=delete&ID=2">Obriši</a>
<?php

echo '<pre>';
	print_r($_REQUEST);
echo '</pre>';
	

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
