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
		$matricule = $_SESSION['cll_matricule'];
		$d = getCodeRegionDelegue($matricule);
		$region =$d['tra_reg_code'];
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		$execTableauAC = getLesAC($_SESSION['cll_matricule']);
		include("vues/v_activiteVenirDelegue.php");
		break;
	}
	case 'detailler':
	{
		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		$reg ="";
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		
		$execTableauAC = getLesACDelegue($region);

		foreach ($execTableauAC as $uneAC) 
		{
			$nom = $uneAC['ac_num'];
			if (isset($_POST[$nom]))
			{
				$execLesPracticiensInvites = getACVPracticiensInvites($nom);
		$execLesCollaborateursParticipants = getACVCollaborateursParticipants($nom);
		include("vues/v_activiteVenir_detailsDelegue.php");
				break;
			}
		}
		
		break;
	}
}
?>