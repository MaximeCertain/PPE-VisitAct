<div id="contentPraSaisir">
	<div class="block-3 bg-1">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=saisiecr&action=enregistrerCR">
					<div class="form-group col-md-6">
						<label>Numéro de compte-rendu</label>
						<input type="text" name="numCR" class="form-control" required>
					</div>
					<div class="form-group col-md-6">
						<label>Saisir votre matricule</label>
						<input type="text" name="matricule" class="form-control" required>
					</div>
					<div class="form-group col-md-6">
						<label>Saisir la date de la visite</label>
						<input type="date" name="dateVisite" class="form-control" required>
					</div>
					<div class="form-group col-md-6">
						<label>Saisir la date de la rédaction du rapport</label>
						<input type="date" name="dateRapport" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Bilan de la visite</label>
						<textarea name="bilanRapport" class="form-control" rows="3" required="required"></textarea>
					</div>
					<div class="form-group col-md-6">
					<label>Motif de la visite</label>
						<select name="niveau" class="form-control">
							<?php
							foreach($lesMotifs as $donnees2)
							{
								if($donnees2['mot_libelle'])
								{
									echo"<option selected value=".$donnees2['mot_code'].">".$donnees2['mot_libelle']."</option>";
								}
								else
								{
									echo"<option value=".$donnees2['mot_code'].">".$donnees2['mot_libelle']."</option>";
								}
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
					<label>Practicien visité</label>
						<select name="praticienNum" class="form-control">
							<?php
							foreach($lesPraticiens as $donnees3)
							{
								if($donnees3['pra_num'])
								{
									echo"<option selected value=".$donnees3['pra_num'].">".$donnees3['pra_nom']." ".$donnees3['pra_prenom']."</option>";
								}
								else
								{
									echo"<option value=".$donnees3['pra_num'].">".$donnees3['pra_nom']." ".$donnees3['pra_prenom']."</option>";
								}
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
					<label>1er médicament présenté</label>
						<select name="medicament1" class="form-control">
							<?php
							foreach($lesMedicaments as $donnees4)
							{
								if($donnees4['med_depotlegal'])
								{
									echo"<option selected value=".$donnees4['med_depotlegal'].">".$donnees4['med_nomcommercial']."</option>";
								}
								else
								{
									echo"<option value=".$donnees4['med_depotlegal'].">".$donnees4['med_nomcommercial']."</option>";
								}
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
					<label>2ème médicament présenté</label>
						<select name="medicament2" class="form-control">
							<?php
							foreach($lesMedicaments as $donnees5)
							{
								if($donnees5['med_depotlegal'])
								{
									echo"<option selected value=".$donnees5['med_depotlegal'].">".$donnees5['med_nomcommercial']."</option>";
								}
								else
								{
									echo"<option value=".$donnees5['med_depotlegal'].">".$donnees5['med_nomcommercial']."</option>";
								}
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-12">
					<br><fieldset>
						  <legend> Choisir les médicaments offerts (facultatif) </legend>
							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Dépot légal</th>
									  <th class="tableTH" style="width: 15%;">Nom commercial</th>
									  <th class="tableTH">Présenté</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($lesMedicaments as $unMedicament)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unMedicament['med_depotlegal'].'</td>
										  <td class="tableTD">'.$unMedicament['med_nomcommercial'].'</td>
										  <td class="tableTD"> <input name="offreMedicament'.$unMedicament['med_depotlegal'].'" value='.$unMedicament['med_depotlegal'].' type="checkbox"/> </td>';
									echo '</tr>'; 

									$cpt++;
								}

								echo '</center></table>';
							
							?> 
							</div>
							<div class="form-group">
								<input type="submit" name="validerCR" value = "Enregistrer" onclick="submit()">
							</div>
						</fieldset>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

