<?php
session_start();
include ("includes/header.php") ;
include ("includes/modele/connect_bdd.php") ;
include ("includes/modele/gestion_bdd.php") ;

if(!isset($_REQUEST['uc']))
	$uc = 'authentification';
else
	$uc = $_REQUEST['uc'];

switch($uc)
{
	case 'authentification':
	{
		include("controleurs/c_authentification.php");
		break;
	}
	case 'menu':
	{
		include("vues/v_menu.php");
		include("controleurs/c_accueil.php");
		break;
	}
	case 'medicament':
	{
		include("controleurs/c_medicament.php");
		break;
	}
	case 'praticien':
	{
		include("controleurs/c_praticien.php");
		break;
	}
	case 'consultation':
	{
		include("controleurs/c_consultation.php");
		break;
	}
	/*------------RESPONSABLE-------------------*/ 
	case 'enregistrer':
	{
		include("controleurs/c_enregistrer.php");
		break;
	}
	case 'muter':
	{
		include("controleurs/c_muter.php");
		break;
	}
	case 'muterModification':
	{
		include("controleurs/c_muter.php");
		break;
	}
	case 'noter':
	{
		include("controleurs/c_noter.php");
		break;
	}
	case 'statistiques':
	{
		include ("controleurs/c_statistiques.php");
		break;

	}
	case 'promotion':
	{
		include("controleurs/c_promotion.php");
		break;
	}
	case 'budget':
	{
		include("controleurs/c_budget.php");
		break;
	}
	case 'consulterBudget':
	{
		include("controleurs/c_consulterBudget.php");
		break;
	}
	case 'validerAC':
	{
		include("controleurs/c_validerAC.php");
		break;
	}
	/*-----------------VISITEUR----------------------*/
	case 'saisiecr' :
	{
		include("controleurs/c_saisieCR.php");
		break;
	}
	
	case 'acVenir' :
	{
		include("controleurs/c_activiteVenir.php");
		break;
	}
	
	case 'listeCr' :
	{
		include("controleurs/c_majCR.php");
		break;
	}

	case 'statistiqueVisiteur' : 
	{
		include("controleurs/c_statistiqueVisiteur.php");
		break;
	}
	/*--------------DELEGUE--------------------*/
	case 'statistiques_region':
	{
			include("controleurs/c_statistiques_region.php");
			break;
	}
	case 'saisieAC':	
	{
		include("controleurs/c_saisieAC.php");
		break;
	}
	case 'saisieCR':	
	{
		include("controleurs/c_saisieCRDelegue.php");
		break;
	}
	case 'modifierCR':
	{
		include("controleurs/c_majCRDelegue.php");
		break;
	}
	case 'comptecr':
	{
		include("controleurs/c_cr_consultation.php");
		break;
	}
	case 'ConsultationACV':
	{
		include("controleurs/c_consultation_ac_validees.php");
		break;
	}
	case 'consultationAC':
	{
		include("controleurs/c_activiteVenirDelegue.php");
		break;
	}

	case 'statistiques_med_off':
	{
		include ("controleurs/c_statistiques_med_offerts.php");
		break;

	}
	case 'statistiques_med_pre':
	{
		include("controleurs/c_statistiques_med_presentes.php");
		break;
	}
}
?>