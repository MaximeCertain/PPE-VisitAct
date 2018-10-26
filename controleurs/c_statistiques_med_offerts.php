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

		$execStats = getStatsMedicamentsOfferts($region);
		$reg ="";
		$reg= getRegion($region);
		$RegionDelegue = $reg['reg_nom'];
		$data = "";
 		foreach ($execStats as $uneStat)                       	
        {  
        	$data .="['".$uneStat["med_nomcommercial"]." ◄► ".$uneStat["nb"]." offres', ".$uneStat["nb"]."],";
        }                   
		include("vues/v_statistiques_med_offerts.php");
		break;
	}
}
?>