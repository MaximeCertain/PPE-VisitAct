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
		$execTableauAC = getLesAC($matricule);
		include("vues/v_activiteVenir.php");
		break;
	}
	case 'detailler':
	{
		$matricule = $_SESSION['cll_matricule'];		
		$execTableauAC = getLesAC($matricule);
		foreach ($execTableauAC as $uneAC) 
		{
			$nom = $uneAC['ac_num'];
			if (isset($_POST[$nom]))
			{
			$execLesPracticiensInvites = getACVPracticiensInvites($nom);
			$execLesCollaborateursParticipants = getACVCollaborateursParticipants($nom);
			include("vues/v_activiteVenir_details.php");
			break;
			}
		}
		
		break;
	}
}
?>