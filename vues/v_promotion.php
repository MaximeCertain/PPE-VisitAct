<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<form id="contact-form" method="POST" action="index.php?uc=promotion&action=modifier">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contact-form-loader"></div>
					<?php	
							if(count($execTableauVisiteur))
							{	
								echo '	
								<h4>Promouvoir un Visiteur</h4>
								<center>
									<table class="table table-responsive">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom</th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  <th class="tableTH" style="width: 15%;">Rôle</th>
									  <th class="tableTH" style="width: 15%;"></th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauVisiteur as $unVisiteur)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unVisiteur['cll_nom'].'</td>
										  <td class="tableTD">'.$unVisiteur['cll_prenom'].'</td>
										  <td class="tableTD">'.$unVisiteur['tra_role'].'</td>
										  <td class="tableTD"><a href="index.php?uc=promotion&action=modifierVisiteur&numCll='.$unVisiteur['cll_matricule'].'&regCode='.$unVisiteur['tra_reg_code'].'"><input type="button" name="matricule" value="Promouvoir" class="btn btn-primary"/></a></td>
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
						<div class="col-sm-6">
						<div class="contact-form-loader"></div>

					<?php	
						if(count($execTableauDelegue))
						{	
							echo '	
								<h4>Promouvoir un Délégué</h4>
								<center>
									<table class="table table-responsive">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom</th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  <th class="tableTH" style="width: 15%;">Rôle</th>
									  <th class="tableTH" style="width: 15%;"></th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableauDelegue as $unDelegue)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unDelegue['cll_nom'].'</td>
										  <td class="tableTD">'.$unDelegue['cll_prenom'].'</td>
										  <td class="tableTD">'.$unDelegue['tra_role'].'</td>
										  <td class="tableTD"><a href="index.php?uc=promotion&action=modifierDelegue&numCll='.$unDelegue['cll_matricule'].'&regCode='.$unDelegue['tra_reg_code'].'"><input type="button" name="matricule" value="Promouvoir" class="btn btn-primary"/></a></td>
										  </tr>'; 
									$cpt++;
								}
								echo '</center></table>';
						}
						else
						{
							echo "<h4>Aucun délégués</h4>";
						}	
							?> 
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>