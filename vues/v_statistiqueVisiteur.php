<!--========================================================
                        	CONTENT
	=========================================================-->
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=statistiqueVisiteur&action=afficherStatistique">
							Le m&eacute;dicament que vous avez le plus pr&eacute;sent&eacute; est : <?php echo' '.$MedicamentPlusPresente['med_nomcommercial'].' ';?> </br>
							</br> Le m&eacute;dicament que vous avez le plus offert est :  <?php echo' '.$MedicamentPlusOffert['med_nomcommercial'].' '; ?> </br>
							</br> Le visiteur ayant re&ccedil;u le plus de visite de votre part est : <?php echo' '.$PraticienPlusVisite['pra_nom'].' '.$PraticienPlusVisite['pra_prenom'].' '; ?> 
				</form>
			</div>
		</div>
	</div>
</div>
