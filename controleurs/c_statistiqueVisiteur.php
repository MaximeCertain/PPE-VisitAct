<?php
// PARTIE CODE PAR EL HASSAN 
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficherStatistique';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficherStatistique':
	{
		$MedicamentPlusOffert = getMedicamentPlusOffert($_SESSION['cll_matricule']);
		$MedicamentPlusPresente = getMedicamentPlusPresente($_SESSION['cll_matricule']);
		$PraticienPlusVisite = getPraticienPlusVisite($_SESSION['cll_matricule']);
		include("vues/v_statistiqueVisiteur.php");
		break;
	}
	
}
?>