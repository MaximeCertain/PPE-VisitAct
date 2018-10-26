<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
					<form id="contact-form" method="POST" action="index.php?uc=muter&action=afficherTous">
						<div class="contact-form-loader">	</div>
						<?php 
							if(count($execTableau))
							{	
								echo '	
								<h4>Muter un Visiteur</h4>
								<center>
									<table class="table table-responsive">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom</th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  <th class="tableTH" style="width: 15%;">Région</th>
									  <th class="tableTH" style="width: 15%;"></th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableau as $unVisiteur)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unVisiteur['cll_nom'].'</td>
										  <td class="tableTD">'.$unVisiteur['cll_prenom'].'</td>
										  <td class="tableTD">'.$unVisiteur['reg_nom'].'</td>
										  <td class="tableTD"><a href="index.php?uc=muterModification&action=afficherLeVisiteur&numCll='.$unVisiteur['cll_matricule'].'"><input type="button" name="Modifier" value="Modifier" class="btn btn-primary"/></a></td>
										  </tr>'; 
									$cpt++;
								}

								echo '</center></table>';
							}
							else
							{
								echo "<h4>Aucun visiteur</h4>";
							}	
					?>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>