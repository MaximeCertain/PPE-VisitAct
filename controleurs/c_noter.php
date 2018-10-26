<?php
include("vues/v_menu.php");

if (!isset($_REQUEST['action']))
	$action = 'afficher';
else
	$action = $_REQUEST['action'];

switch ($action) 
{
	case 'afficher':
	{
		$lesMatricules = getCodeCollaborateur();
		include("vues/v_noter.php");
		break;
	}
	case 'noter':
	{
		include("vues/v_noter.php");

		$matricule = $_REQUEST['matricule'];
		$note = $_REQUEST['note'];
		$bilan = $_REQUEST['bilan'];

		if(!empty($matricule) AND !empty($note) AND !empty($bilan))
		{
			SetAjoutNoteVisiteur($matricule, $note, $bilan);
			echo"<script>alert('Bien enregistré !');</script>";
		}
		else
		{
			echo"<script>alert('Veuillez remplir tous les champs');</script>";
		}
		break;

	}
}
?>