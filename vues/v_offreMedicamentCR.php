<!--========================================================
                        	CONTENT
	=========================================================-->
		
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=saisiecr&action=enregistrerOffre">
						<div class="contact-form-loader">	</div>
						<fieldset>
						  <legend align = center> Choisir les médicaments offert </legend>
							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Dépot légal</th>
									  <th class="tableTH" style="width: 15%;">Nom commercial</th>
									  <th class="tableTH">Présenté</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauMedicament as $unMedicament)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unMedicament['med_depotlegal'].'</td>
										  <td class="tableTD">'.$unMedicament['med_nomcommercial'].'</td>
										  <td class="tableTD"> <input name="offreMedicament" value='.$unMedicament['med_depotlegal'].' type="checkbox"/> </td>';
									echo '</tr>'; 

									$cpt++;
								}

								echo '</center></table>';
							
							?> 
							<input type="submit" name="validerOffre" value = "EnregistrerOffre">
							</div>
							
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
