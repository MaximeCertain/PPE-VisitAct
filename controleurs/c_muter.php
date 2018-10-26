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
		$execTableau = getCodeCollaborateur();
		include("vues/v_muter.php");
		break;
	}
	case'afficherLeVisiteur':
	{
		$execAfficherVisiteur = getLeVisiteur($_GET['numCll']);
		$lesRegions = getCodeRegion();
		include("vues/v_muterModifier.php");
		break;
	}
	case'modifier':
	{
		$numCll = $_POST['numCll'];
		$region = $_POST['region'];
		setMuterVisiteur($region,$numCll);
		break;
	}

}
?>