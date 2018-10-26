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
	{	
		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		$reg ="";
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		$execTableauCR = getLesComptesRendus($region);
		include("vues/v_cr_consultation.php");
		break;
	}
	case 'detailler':
	{

		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		$execTableauCR = getLesComptesRendus($region);
		var_dump($_POST);
		foreach ($execTableauCR as $unCR)
		{	
			$nom = $unCR['rap_num'];
			
			if (isset($_POST[$nom]))
			{
				$ExecLesMedicamentsRapport = getMedicamentsRapport($nom);
				$ExecLesMedicamentsPresentes = getMedicamentsRapportPresentes($nom);			
				include ("vues/v_cr_consultation_details.php");

				break;
			}
		}
		
		break;
	}
}
?>