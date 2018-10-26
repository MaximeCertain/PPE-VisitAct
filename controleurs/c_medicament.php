<?php
// PARTIE CODE PAR EL HASSAN 
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficher';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficher':
	{
		$execTableauMedicament = getLesMedicaments();
		include("vues/v_medicament.php");
		break;
	}

}
?>