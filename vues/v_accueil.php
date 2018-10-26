<!--========================================================
                        	CONTENT
	=========================================================-->

<?php

switch($_SESSION['PRF_CODE'])
{
	case 1 :
	{
		$message = "Bienvenue sur le menu Visiteur";
		break;
	}
	case 2 :
	{
		$message = "Bienvenue sur le menu Délégué";
		break;
	}
	case 3 :
	{
		$message = 'Bienvenue sur le menu Responsable<br><br>';
		break;
	}
}

?>

<div class="contentAccueil">
	<?php echo($message);?>
</div>