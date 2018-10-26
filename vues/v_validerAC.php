<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<form id="contact-form" method="POST" action="index.php?uc=promotion&action=modifier">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="contact-form-loader"></div>
					<?php	
						if(count($execTableau))
						{	
							echo '	
									<center>
									<table class="table table-responsive">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Num</th>
									  <th class="tableTH" style="width: 15%;">Date</th>
									  <th class="tableTH" style="width: 15%;">Lieu</th>
									  <th class="tableTH" style="width: 15%;">Theme</th>
									  <th class="tableTH" style="width: 15%;">Budget</th>
									  <th class="tableTH" style="width: 15%;"></th>
									 </tr>' ;

								$cpt = 0;
								foreach ($execTableau as $uneAC)
								{
									echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
									echo '<td class="tableTD">'.$uneAC['ac_num'].'</td>
										  <td class="tableTD">'.$uneAC['ac_date'].'</td>
										  <td class="tableTD">'.$uneAC['ac_lieu'].'</td>
										  <td class="tableTD">'.$uneAC['ac_theme'].'</td>
										  <td class="tableTD">'.$uneAC['ac_budgetEstime'].'</td>
										  <td class="tableTD"><a href="index.php?uc=validerAC&action=valider&acNum='.$uneAC['ac_num'].'"><input type="button" name="valider" value="Valider" class="btn btn-primary"/></a></td>
										  </tr>'; 
									$cpt++;
								}
								echo '</center></table>';
						}
						else
						{
							echo "<h4>Aucune acitivité complémentaire à valider</h4>";
						}
							
							?> 
						</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>