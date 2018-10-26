<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=consulterBudget&action=consulterBudget">
						<div class="contact-form-loader"></div>
						<fieldset>
							<?php

						if(count($lesBudgets))
						{	
							echo '	<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Région</th>
									  <th class="tableTH" style="width: 15%;">Année</th>
									  <th class="tableTH">Budget</th>
									 </tr>' ;

								$cpt = 0;
								foreach ($lesBudgets as $unBudget)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$unBudget['reg_nom'].'</td>
										  <td class="tableTD">'.$unBudget['disp_annee'].'</td>
										  <td class="tableTD">'.$unBudget['disp_budget_annuel'].'</td>';
									echo '</tr>'; 

									$cpt++;
								}

								echo '</center></table>';
						}
						else
						{
							echo "<h4>Aucun budgets dans vos régions</h4>";
						}	
							?> 
								
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
