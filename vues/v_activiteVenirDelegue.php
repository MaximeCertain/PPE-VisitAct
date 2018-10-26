<!--========================================================
                        	CONTENT
	=========================================================-->
		
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=consultationAC&action=detailler">
						<div class="contact-form-loader">	</div>
						<fieldset>
						  <h3> Activités complémentaires à venir de la région <strong><?php echo $RegionDelegue; ?> </strong> </h3>
						  
							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Numéro</th>
									  <th class="tableTH" style="width: 15%;">Date</th>
									  <th class="tableTH">Lieu</th>
									  <th class="tableTH">Thème</th>
									  <th class="tableTH">Matricule collaborateur</th>
									  <th class="tableTH">Budget estimé (€)</th>
									  <th class="tableTH">AC Validée ?</th>
									  <th class="tableTH">Visualiser</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauAC as $uneAC)
								{
									 if ($uneAC['ac_validation'])
										  {
											$validation = 'OUI';  
										  }
										 else 
										 {
											 $validation = 'NON';
										 }
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$uneAC['ac_num'].'</td>
										  <td class="tableTD">'.$uneAC['ac_date'].'</td>
										  <td class="tableTD">'.$uneAC['ac_lieu'].'</td>
										  <td class="tableTD">'.$uneAC['ac_theme'].'</td>
										  <td class="tableTD">'.$uneAC['ac_cll_matricule'].'</td>


										  <td class="tableTD">'.$uneAC['ac_budgetEstime'].'</td>
										<td class="tableTD">'.$validation.'</td>
										<td class="tableTD"><input id="button"  value="Visualiser"  name="'.$uneAC['ac_num'].'"  type="submit" /></td>';
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
