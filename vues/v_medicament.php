<!--========================================================
                        	CONTENT
	=========================================================-->
		
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=authentification&action=verifier">
						<div class="contact-form-loader">	</div>
						<fieldset>

							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Dépot légal</th>
									  <th class="tableTH" style="width: 15%;">Nom Commercial</th>
									  <th class="tableTH">Famille</th>
									  <th class="tableTH">Composition</th>
									  <th class="tableTH">Effets </th>
									  <th class="tableTH">Contre Indication</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauMedicament as $unMedicament)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unMedicament['med_depotlegal'].'</td>
										  <td class="tableTD">'.$unMedicament['med_nomcommercial'].'</td>
										  <td class="tableTD">'.$unMedicament['med_fam_code'].'</td>
										  <td class="tableTD">'.$unMedicament['med_composition'].'</td>
										  <td class="tableTD">'.$unMedicament['med_effets'].'</td>
										  <td class="tableTD">'.$unMedicament['med_contreindic'].'</td>';
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
	</div>
</div>
