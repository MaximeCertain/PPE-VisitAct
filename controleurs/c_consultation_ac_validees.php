<?php 
//
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficher';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficher':
	{	$matricule = $_SESSION['cll_matricule'];
		
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		
		$region ="";
		$region =$d['tra_reg_code'];

		$reg ="";
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		$date=date("Y");
		
		$execTableauACValidees = getACValideesAnnee($date,$region);
		
		include("vues/v_consultation_ac_validees.php");
		break;
	}
	case 'detailler':
	{
		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		$date=date("Y");
		$execTableauACValidees = getACValideesAnnee($date, $region);
		foreach ($execTableauACValidees as $unACV) 
		{
			$nom = $unACV['ac_num'];
			if (isset($_POST[$nom]))
			{
			$execLesPracticiensInvites = getACVPracticiensInvites($nom);
			$execLesCollaborateursParticipants = getACVCollaborateursParticipants($nom);
			include ("vues/v_consultation_ac_validees_details.php");
			break;
			}
		}
		break;
	}

}
?>