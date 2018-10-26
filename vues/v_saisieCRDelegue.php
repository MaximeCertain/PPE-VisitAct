<!--========================================================
                        	CONTENT
	=========================================================-->
	
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=saisieCR&action=enregistrerCR">
						<fieldset style="border:1">
						<h3 align = center> Saisir le compte-rendu </h3>
						<table align = center>
							<!-- <tr>
								<td><label> Numéro de compte-rendu : </label></td>
								<td><input type="text" name="numCR"></td>
							</tr> 
							<tr> -->
								<!--<td><label> Saisir votre matricule : </label></td>
								<td><input type="text" name="matricule"></td>
							</tr> -->
							<tr>
								<td><label> Saisir la date de la visite : </label></td>
								<td><input type="date" name="dateVisite"></td>
							</tr> 
							<tr>
								<!-- <td><label> Saisir la date de la rédaction du rapport : </label></td>
								<td><input type="date" name="dateRapport"></td>
							</tr>-->
							<tr>
								<td><label> Bilan de la visite : </label></td>
								<td><textarea rows = "5" cols = "50" name="bilanRapport"> </textarea>
							</tr>
							<tr>
								<td><label> Motif de la visite : </label></td>
								<td>
								<select value ="niveau" name="niveau"> <?php
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
								</td>
								
							<tr>
								<td><label> Praticien visité : </label>
								<td>
								<select value ="praticienNum" name="praticienNum"> <?php
			Foreach($lesPraticiens as $donnees3)
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
								</td>
							</tr>
							
							<tr>
								<td><label> 1er médicament présenté : </label>
								<td>
								<select value ="medicament1" name="medicament1"> <?php
			Foreach($lesMedicaments as $donnees4)
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
								</td>
							</tr>
							
							<tr>
								<td><label> 2ème médicament présenté : </label>
								<td>
								<select value ="medicament2" name="medicament2"> <?php
			Foreach($lesMedicaments as $donnees5)
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
			
								echo'</td>
							</tr>
							
							</table> </br> </br>
						
						</fieldset>'
							
?>								
							</div>
							
							<fieldset>
						  <legend align = center> Choisir les médicaments offerts (facultatif) </legend>
							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Dépot légal</th>
									  <th class="tableTH" style="width: 15%;">Nom commercial</th>
									  <th class="tableTH">Offert</th>
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
							<input type="submit" name="validerCR" type="submit" value = "Enregistrer">
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
