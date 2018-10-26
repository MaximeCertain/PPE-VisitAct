<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=ConsultationACV&action=detailler">		
						<div class="contact-form-loader"></div>
						<fieldset>
						<h3>Activités Complémentaires validées de l'année  de la région <strong><?php echo $RegionDelegue; ?> </strong></h3>
							<?php
							echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Numéro AC
									  </th>
									  <th class="tableTH" style="width: 15%;">Date</th>
									  <th class="tableTH">Lieu</th>
									  <th class="tableTH">Theme</th>
									  <th class="tableTH">Budget Estime</th>
									  <th class="tableTH">Nom </th>
									  <th class="tableTH">Prenom</th>
									  <th class="tableTH">Visualiser</th>
									 </tr>' ;

$cpt = 0;

foreach ($execTableauACValidees as $uneAC)
	{
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$uneAC['ac_num'].'</td>
	<td class="tableTD">'.$uneAC['ac_date'].'</td>
	<td class="tableTD">'.$uneAC['ac_lieu'].'</td>
	<td class="tableTD">'.$uneAC['ac_theme'].'</td>
	<td class="tableTD">'.$uneAC['ac_budgetEstime'].'</td>
	<td class="tableTD">'.$uneAC['cll_nom'].'</td>
	<td class="tableTD">'.$uneAC['cll_prenom'].'</td>
	<td class="tableTD"><input id="button"  value="Visualiser"  name="'.$uneAC['ac_num'].'"  type="submit"/></td>
	';

	echo '</tr>'; 
	$cpt++;
	}

	echo '</center></table>';							
?> 
						</fieldset>
					</form>
				</div>
			</div>
</div>		</div>