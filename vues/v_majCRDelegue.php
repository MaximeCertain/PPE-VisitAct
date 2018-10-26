<!--========================================================
                        	CONTENT
	=========================================================-->
	
 <div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=modifierCR&action=afficherCr">
							<!--========================================================
                        	CONTENT
	=========================================================-->
	
 <div id="contentMed">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=modifierCR&action=afficherCr">
						<fieldset>
						  <legend align = center> Choisir le compte-rendu à modifier </legend>
							<?php
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Visiteur</th>
									  <th class="tableTH" style="width: 10%;">Date de la visite</th>
									  <th class="tableTH" style="width: 15%;">Date de la saisie</th>
									  <th class="tableTH">Bilan du rapport</th>
									  <th class="tableTH">Motif de la visite</th>
									  <th class="tableTH">Practicien visité</th>
									  <th class="tableTH">Modifier</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauCR as $unCR)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unCR['cll_nom'].' '.$unCR['cll_prenom'].'</td>
										  <td class="tableTD">'.$unCR['rap_date_visite'].'</td>
										  <td class="tableTD">'.$unCR['rap_date'].'</td>
										  <td class="tableTD">'.$unCR['rap_bilan'].'</td>
										  <td class="tableTD">'.$unCR['mot_libelle'].'</td>
										  <td class="tableTD">'.$unCR['pra_nom'].' '.$unCR['pra_prenom'].'</td>
										  <td class="tableTD"> <a href="index.php?uc=modifierCR&action=afficherLeCr&numCr='.$unCR['rap_num'].'&matriculeCr='.$unCR['rap_cll_matricule'].'"> <input type="button" name="Modifier" value = "Modifier"> </a> </td>
										</tr>'; 

									$cpt++;
								}

								echo '</center></table>';
							
							?> 
								
							</div>
						</fieldset>
					</form>
				</div>
		</div>

					</form>
				</div>
			</div>
		</div>
