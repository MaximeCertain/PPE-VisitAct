<?php
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficher';
else
	$action = $_REQUEST['action'];


switch ($action) 
{
	case 'afficher':
	{
		$lesRegions = getCodeRegion();
		include("vues/v_budget.php");
		break;
	}
	case 'budget':
	{
		$region = $_REQUEST['region'];
		$annee = $_REQUEST['annee'];
		$budget = $_REQUEST['budget'];
		SetAjoutBudget($region, $annee, $budget);
		break;

	}
}
?>