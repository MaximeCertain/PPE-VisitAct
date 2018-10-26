<?php
// PARTIE CODE PAR EL HASSAN 
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'saisir';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'saisir':
	{
		$lesTypes = getLesTypesPraticiens();
		$lesMotifs = getLesMotifs();
		$lesPraticiens = getLesPraticiens();
		$lesMedicaments = getLesMedicaments();

		$matricule = $_SESSION['cll_matricule'];
		$d ="";
		$d = getCodeRegionDelegue($matricule);
		$region ="";
		$region =$d['tra_reg_code'];
		include("vues/v_saisieCRDelegue.php");
		break;
	}
	
	case 'enregistrerCR' : 
	{
		$matricule = $_SESSION['cll_matricule'];
		$dateVisite = $_POST['dateVisite'];
		//$dateRapport = $_POST['dateRapport'];
		$bilanRapport = $_POST['bilanRapport'];
		$motifVisite = $_POST['niveau'];
		$praticien = $_POST['praticienNum'];
		$d = getDernierCR();
		$dr = $d['nb'];
		$numCR = $dr + 1;
		//$numCR = $_POST['numCR'];
		$medicament1 = $_POST['medicament1'];
		$medicament2 = $_POST['medicament2'];
		$lesMedicaments = getLesMedicaments();
		if(getAjouterRapportDelegue($matricule,$numCR,$dateVisite,$bilanRapport, $motifVisite, $praticien) &&
		getAjoutMedicamentPresente($numCR, $matricule, $medicament1)&&
		getAjoutMedicamentPresente($numCR, $matricule, $medicament2))
		{
		echo"<script>alert('Compte-rendu bien enregistré');</script>";
		}
		$cpt = 0;
		foreach($lesMedicaments as $unMedicament)
		{
			$nom = 'offreMedicament'.$unMedicament['med_depotlegal'];
			if(isset($_POST[$nom]))
			{			
				getAjoutOffre($numCR, $matricule,$unMedicament['med_depotlegal']);
				$cpt++;
			}
		}	
		if($cpt > 0)
		{
			echo"<script>alert('Médicament(s) offert(s) bien enregistré(s)';</script>";
		}
		else
		{
			echo"<script>alert('Aucun médicament offert');</script>";
		}
		break;
	}
}
?>