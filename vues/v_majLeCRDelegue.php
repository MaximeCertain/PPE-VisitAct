<!--========================================================
                        	CONTENT
	=========================================================-->
	
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=modifierCR&action=modifierCr">
						<fieldset style="border:1">
						<legend align = center> Modifier le compte-rendu </legend>
						<table align = center>
						<?php
						
							
							echo'<tr>
								<td><label> Numéro de compte-rendu : </label></td>
								<td><input type="text" name="numCR" value="'.$unCR['rap_num'].'" readonly> </td>
							</tr> 
							<tr>
								<td><label> Numéro du matricule : </label></td>
								<td><input type="text" name="matricule" value="'.$unCR['rap_cll_matricule'].'" readonly </td>
							</tr> 
							<tr>
								<td><label> Date de la visite : </label></td>
								<td><input type="date" name="dateVisite" value="'.$unCR['rap_date_visite'].'"></td>
							</tr> 
							<tr>
								<td><label> Date de la rédaction du rapport : </label></td>
								<td><input type="date" name="dateRapport" value="'.$unCR['rap_date'].'"></td>
							</tr>
							<tr>
								<td><label> Bilan de la visite : </label></td>
								<td><textarea rows = "5" cols = "50" name="bilanRapport">'.$unCR['rap_bilan'].'</textarea>
							</tr>
							<tr>
								<td><label> Motif de la visite : </label></td>
								<td>
								<select value ="niveau" name="niveau">'?> <?php
			foreach($lesMotifs as $donnees2)
			{
				if($donnees2['mot_code'] == $unCR['rap_mot_code'])
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
								<td><label> Practicien visité : </label>
								<td>
								<select value ="praticienNum" name="praticienNum"> <?php
			Foreach($lesPraticiens as $donnees3)
			{
				if($donnees3['pra_num'] == $unCR['rap_pra_num'])
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
			 <?php
			$cpt = 1;
			Foreach($lesMedicamentsPresentes as $medicPresentes)
			{
				echo"		<tr>
								<td><label> Médicament présenté n°".$cpt." : </label>
								<td>
								<select value ='medicament".$cpt."' name='medicament".$cpt."'>'";
				foreach($lesMedicaments as $donnees4)
				{
					if($donnees4['med_depotlegal'] == $medicPresentes['pre_med_depotlegal'])
					{
						
						echo'<option selected value="'.$medicPresentes['pre_med_depotlegal'].'">'.$donnees4['med_nomcommercial'].'</option>';
					}
					else
					{
						echo'<option value="'.$donnees4['med_depotlegal'].'">'.$donnees4['med_nomcommercial'].'</option>';
					}
				}
				echo'</td>
				</tr>';
				$cpt++;
					
				}	
			
			?>
				</table> </br> </br>
				
			
				
											<fieldset>
						  <legend align = center> Choisir les médicaments offerts (facultatif) </legend>
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
									if (existeMedicamentOffert($unMedicament['med_depotlegal'], $_GET['numCr'], $_SESSION['cll_matricule']))
										
									{
									      echo '
										  <td class="tableTD">'.$unMedicament['med_depotlegal'].'</td>
										  <td class="tableTD">'.$unMedicament['med_nomcommercial'].'</td>
										  <td class="tableTD"> 
										  <input name="offreMedicament'.$unMedicament['med_depotlegal'].'" value='.$unMedicament['med_depotlegal'].' type="checkbox" checked/> </td> </tr>';
									}
										else
										{
										  echo '
										  <td class="tableTD">'.$unMedicament['med_depotlegal'].'</td>
										  <td class="tableTD">'.$unMedicament['med_nomcommercial'].'</td>
										  <td class="tableTD"> 
										  <input name="offreMedicament'.$unMedicament['med_depotlegal'].'" value='.$unMedicament['med_depotlegal'].' type="checkbox"/> </td> </tr>';
										}
							
									$cpt++;
								}
									echo '</center></table>';
								

								
							
							?> 
								<input type="submit" name="ModifierCr" value = "Modifier">
						</fieldset>
							
								
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
