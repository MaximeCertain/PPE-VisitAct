<div id="contentPraAfficher">
	<div class="bg-1">
		<div class="container">
			<div class="row">
				<div class="contact-form-loader">	</div>
					<fieldset>
						<h4>Liste des Praticiens</h4>
					    <?php
					    echo '	<center>
									<table class="table">
										<tr> 
										  <th class="tableTH">Nom</th>
										  <th class="tableTH">Prénom</th>
										  <th class="tableTH">Métier</th>
										  <th class="tableTH">Adresse</th> 
		   								</tr>' ;

							$cpt = 0;
							foreach ($lesPraticiens as $unPraticien)
							{
								echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
								echo '<td class="tableTD">'.$unPraticien['pra_nom'].'</td>
									  <td class="tableTD">'.$unPraticien['pra_prenom'].'</td>
									  <td class="tableTD">'.$unPraticien['typ_libelle'].'</td>
									  <td class="tableTD">'.$unPraticien['pra_adresse'].'</td>';
								echo '</tr>';

								$cpt++;
							}

							echo '</center></table>';
						
						?> 
						</div>
					</fieldset>
				</div>
			</div>
		</div>
	</div>
