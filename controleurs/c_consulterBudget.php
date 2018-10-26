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
		$lesBudgets = getLesBudgets();
		include("vues/v_consulterBudget.php");
		break;
	}

}
?>