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
		$lesRegions = getCodeRegion();
		include("vues/v_enregistrer.php");
		break;
	}
	case 'enregistrer':
	{
		include("vues/v_enregistrer.php");

		$matricule = $_POST['matricule'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$date = $_POST['date'];
		$region = $_POST['region']; 

		if(!empty($matricule) AND !empty($nom) AND !empty($prenom) AND !empty($date) AND !empty($region))
		{	
			getAjouterVisiteur($matricule, $nom, $prenom, $date);
			getAjoutVisiteurTravailler($matricule, $date, $region);
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