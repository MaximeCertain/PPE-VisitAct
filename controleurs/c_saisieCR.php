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
		include("vues/v_saisieCR.php");
		break;
	}
	
	case 'enregistrerCR' : 
	{
		$matricule = $_POST['matricule'];
		$dateVisite = $_POST['dateVisite'];
		$dateRapport = $_POST['dateRapport'];
		$bilanRapport = $_POST['bilanRapport'];
		$motifVisite = $_POST['niveau'];
		$praticien = $_POST['praticienNum'];
		$numCR = $_POST['numCR'];
		$medicament1 = $_POST['medicament1'];
		$medicament2 = $_POST['medicament2'];
		$lesMedicaments = getLesMedicaments();
		if(getAjouterRapport($matricule,$numCR,$dateVisite,$dateRapport,$bilanRapport, $motifVisite, $praticien) &&
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