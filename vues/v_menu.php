<?php
switch ($_SESSION['PRF_CODE'])
{
	case 1 : {
		//visiteur
		 ?> 
			<nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
				<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="includes/img/gsb.png" class="img-responsive" style="height:30px;"></a>
				</div>
				<div>
					<div class="collapse navbar-collapse" id="monMenu">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comptes-rendus<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=saisiecr">Saisir compte-rendu</a></li>
								<li><a href="index.php?uc=listeCr">Modifier compte-rendu</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Consultation des données<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=medicament">Médicaments</a></li>
								<li><a href="index.php?uc=praticien">Praticiens</a></li>
								<li><a href="index.php?uc=acVenir">Activités complémentaires</a></li>
							</ul>
						</li>
						<li><a href="index.php?uc=statistiqueVisiteur">Statistiques</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
					</ul>
			    </div>
			   	</div>
			</nav>
				<?php 
		break ;
	}
	
	case 2 : {
		//delegue A MODIFIER
		?>
		<nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
				<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="includes/img/gsb.png" class="img-responsive" style="height:30px;"></a>
				</div>
				<div>
					<div class="collapse navbar-collapse" id="monMenu">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a href="index.php?uc=compte_rendus" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Comptes-rendus<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=saisieCR">Saisir compte-rendu</a></li>
								<li><a href="index.php?uc=modifierCR">Modifier compte-rendu</a></li>
								<li><a href="index.php?uc=comptecr">Consultation</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="index.php?uc=statistiques_region" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Statistiques<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=statistiques_region">Visites de la région</a></li>
								<li><a href="index.php?uc=statistiques_med_off">Médicament Offerts</a></li>
								<li><a href="index.php?uc=statistiques_med_pre">Médicaments Présentés</a></li>
							</ul>
						</li>
						<li class="dropdown"><a href="index.php?uc=AC" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Activités Complémentaires<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=saisieAC">Saisie</a></li>
								<li><a href="index.php?uc=consultationAC">Consultation</a></li>
								<li><a href="index.php?uc=ConsultationACV">Consultation des AC validées</a></li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
					</ul>
			    </div>
			   	</div>
			</nav>
				<?php 
		break ;
	}
	
	case 3 : {
		//responsable A MODIFIER
		 ?> 
			<nav class="navbar navbar-inverse bg-primary navbar-fixed-top">
				<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#monMenu">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="includes/img/gsb.png" class="img-responsive" style="height:30px;"></a>
				</div>
				<div>
					<div class="collapse navbar-collapse" id="monMenu">
					<ul class="nav navbar-nav">
						<li><a href="index.php?uc=statistiques">Statistiques</a></li>
						<li><a href="index.php?uc=enregistrer">Enregistrer</a></li>
						<li><a href="index.php?uc=muter">Muter</a></li>
						<li><a href="index.php?uc=promotion">Promouvoir</a></li>
						<li><a href="index.php?uc=noter">Noter</a></li>
						<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Budget <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="index.php?uc=budget">Ajouter</a></li>
								<li><a href="index.php?uc=consulterBudget">Consulter</a></li>
							</ul>
						</li>
						<li><a href="index.php?uc=validerAC">Valider Activité Complémentaire</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
					</ul>
			    </div>
			   	</div>
			</nav>
				<?php 

		break ;
	}	
}
?>
    