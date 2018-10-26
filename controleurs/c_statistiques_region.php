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

		$execStats = getStatsVisite($region);
		$reg ="";
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		$data = "";
 		foreach ($execStats as $uneStat)                       	
        {  
        	$data .="['".$uneStat["cll_nom"]." ".$uneStat["cll_prenom"]." ◄► ".$uneStat["nb"]." visites', ".$uneStat["nb"]."],";
        }                   
		include("vues/v_statistiques_region.php");
		break;
	}
}
?>