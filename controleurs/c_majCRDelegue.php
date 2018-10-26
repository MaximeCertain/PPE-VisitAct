<?php
// PARTIE CODE PAR EL HASSAN 
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficherCr';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficherCr':
	{
		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		$execTableauCR = getLesCrVisiteurDelegue($region);
		include("vues/v_majCRDelegue.php");
		break;
	}
	case'afficherLeCr':
	{
		$unCR = getLeCr($_GET['numCr'], $_SESSION['cll_matricule']);
		$lesMotifs = getLesMotifs();
		$lesPraticiens = getLesPraticiens();
		$lesMedicaments = getLesMedicaments();
		$lesMedicamentsPresentes = getLesMedicamentsPresentes($_GET['numCr'],$_SESSION['cll_matricule']);
		$lesOffres = getLesMedicamentsOfferts($_GET['numCr'],$_SESSION['cll_matricule']);
		include("vues/v_majLeCRDelegue.php");
		break;
	}
	case'modifierCr':
	{
		$numCR = $_POST['numCR'];
		$matricule = $_POST['matricule'];
		$lesMedicamentsPresentes = getLesMedicamentsPresentes($numCR,$_SESSION['cll_matricule']);
		$lesMedicaments = getLesMedicaments();
		$lesOffres = getLesMedicamentsOfferts($numCR, $matricule);
		$dateVisite = $_POST['dateVisite'];
		$dateRapport = $_POST['dateRapport'];
		$bilan= $_POST['bilanRapport'];
		$motif= $_POST['niveau'];
		$praticien = $_POST['praticienNum'];
		$medicament1 = $_POST['medicament1'];
		$medicament2 = $_POST['medicament2'];
		supprimerMedicamentPresente($numCR, $_SESSION['cll_matricule']);
		supprimerMedicamentOffert($_SESSION['cll_matricule'], $numCR);
		getAjoutMedicamentPresente($numCR, $matricule, $_POST['medicament1']);
		getAjoutMedicamentPresente($numCR, $matricule, $_POST['medicament2']);
		
		
		foreach($lesMedicaments as $unMedicament)
		{
			$nom = 'offreMedicament'.$unMedicament['med_depotlegal'];
			if(isset($_POST[$nom]))
			{			
				getAjoutOffre($numCR, $matricule,$unMedicament['med_depotlegal']);
			}
		}	
		getModifierLeCr($numCR,$dateVisite,$dateRapport,$bilan,$motif,$praticien,$_SESSION['cll_matricule']);
		break;
	}
}
?>