<?php
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficherTous';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficherTous':
	{
		$execTableau = getAfficherAC();
		include("vues/v_validerAC.php");
		break;
	}
	case 'valider':
	{
		$valider = $_GET['acNum'];
		setValiderAC($valider);
		break;
	}
}
?>