<?php 
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'saisir';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'saisir':
	{
		
		include ("vues/v_ajout_ac.php");
		break;
	}
	case 'enregistrer':
	{
		$budget = $_POST['budgetAC'];
		$theme = $_POST['themeAC'];
		$lieu = $_POST['lieuAC'];
		$date = $_POST['dateAC'];
		$matricule = $_SESSION['cll_matricule'];
		//$PracticienNum = $_POST['practiciennum'];
		//$CollaborateurNum = $_POST['collaborateurNum'];
		$numAc = ajouterAC($date, $lieu, $theme, $matricule, $budget);
		//ajoutInvite($PraticienNum, $numAC);
		$lesPracticiens = getLesPraticiens();
		$lesCollaborateurs = getLesCollaborateurs();

		include("vues/v_ajout_ac_choisir_participant.php");
		break;
	}
case 'choisir':
{				
	$lesCollaborateurs = getLesCollaborateurs();
			$lesPracticiens = getLesPraticiens();
	$numAC = $_REQUEST['numAC'];
	foreach ($lesCollaborateurs as $unCollaborateur) 
	{ 
		$nom = $unCollaborateur['cll_matricule'];
		if (isset($_POST[$nom]))
		{
			ajoutParticipant($nom,$numAC); 

		}
	}			include("vues/v_ajout_ac_choisir_practicien.php");

	break;
	
}
case 'terminer':
	{
		$lesPracticiens = getLesPraticiens();
		$numAC = $_REQUEST['numAC'];
		foreach ($lesPracticiens as $unPracticien)
		{
			$nom = $unPracticien['pra_num'];
			if (isset($_POST[$nom]))
			{
				ajoutInvite($nom,$numAC);
				
			}
		}				include ("vues/v_ajout_ac_validee.php");

		break;
		
	}
}	
?>