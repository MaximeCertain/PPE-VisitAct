<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=comptecr&action=detailler">
						<div class="contact-form-loader"></div>
						<fieldset>
						<h3>Médicaments Offerts du Rapport numéro <?php echo $nom; ?> </h3>

<?php  
echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Médicament
									  </th>
									 </tr>' ;
$cpt = 0;
foreach ($ExecLesMedicamentsRapport as $unMed)
{ 
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unMed['med_nomcommercial'].'</td>';
	echo '</tr>'; 
	$cpt++;
}
	echo '</center></table>';							
?>


						<h3>Médicaments Présentés du Rapport numéro <?php echo $nom; ?> </h3>
<?php  
echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Médicament
									  </th>
									  
									 </tr>' ;
$cpt = 0;
foreach ($ExecLesMedicamentsPresentes as $unMedPres)
{ 
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unMedPres['med_nomcommercial'].'</td>';
	echo '</tr>'; 
	$cpt++;
}
	echo '</center></table>';							
?>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>