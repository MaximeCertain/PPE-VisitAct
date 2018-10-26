<?php
/*include ('includes/modele/connect_bdd.php');
include ('includes/modele/gestion_bdd.php');*/

if (!isset($_REQUEST['action']))
	$action = 'demander' ;
else
	$action = $_REQUEST['action'] ;
	
switch ($action)
{
	case 'demander'	:
	{
		include("vues/v_authentification.php");
		break ;
	}
	
    case 'verifier' :    
	{  
		$loginSaisi= $_REQUEST['login'];
		$mdpSaisi=$_REQUEST['mdp'];
		$result= verifierIdentification($loginSaisi, $mdpSaisi) ;
		if ($result)
		{
			$profil = getProfil($loginSaisi);
			$_SESSION['PRF_CODE'] = $profil;
			$_SESSION['CLL_MATRICULE']=$mdpSaisi;
			header("Location:index.php?uc=menu");
		}
		else 
		{
			$_SESSION['error'] = "Identification incorrecte";
			header ("Location:index.php") ;
		}
		break ;
	}
}
?>