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
		include("vues/v_praticien.php");
		break;
	}
	case 'afficher':
	{
		//récupération du type de praticien choisi dans la liste déroulante
		$leTypeCherche = $_REQUEST['typePra'];
		
		//si tous les praticiens recherche de la liste complète
		//sinon recherche des praticiens du type choisi
		if ($leTypeCherche == 'all')
			$lesPraticiens = getLesPraticiensTousType();
		else
			$lesPraticiens = getLesPraticiensDuType($leTypeCherche);
		
		//affichage des données
		include("vues/v_praticien_detail.php");
		break;
	}
}
?>