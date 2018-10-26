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
		$visiteNord = getVisiteNord();
		$visiteEst = getVisiteEst();
		$visiteParis = getVisiteParis();
		$visiteOuest = getVisiteOuest();
		$visiteSud = getVisiteSud();

		include("vues/v_statistiques_visites.php");
	
		break;
	}
}
?>