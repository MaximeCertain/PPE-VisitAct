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
		$execTableauVisiteur = getAffichePromotionVisiteur();
		$execTableauDelegue = getAffichePromotionDelegue();
		include("vues/v_promotion.php");
		break;
	}
	case 'modifierVisiteur':
	{
		$matricule = $_GET['numCll'];
		$region = $_GET['regCode'];
		setPromouvoirVisiteur($matricule,$region);
		break;
	}
	case 'modifierDelegue':
	{
		$matricule = $_GET['numCll'];
		$region = $_GET['regCode'];
		setPromouvoirDelegue($matricule,$region);
		break;
	}
}
?>