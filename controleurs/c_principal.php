<?php
if (isset($_REQUEST['uc']))
{
	switch ($_REQUEST['uc'])
	{
		case 'authentification' : 	
		{  
			include "c_authentification.php" ; 
			break ;
		} 
		case 'accueil' :                
		{  
			include "c_accueil.php" ; 
			break ;
		} 
                
	}
}
?>


