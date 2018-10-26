<!--========================================================
                        	CONTENT
	=========================================================-->
<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=comptecr&action=detailler">
						<div class="contact-form-loader"></div>
						<fieldset>
						<h3>Comptes-rendus des consultations des visiteurs de la région <strong> <?php 
						echo $RegionDelegue;  ?></strong></h1>

<?php
							echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Numéro du Rapport
									  </th>
									  <th class="tableTH" style="width: 15%;">Date de la visite</th>
									  <th class="tableTH">Date</th>
									  <th class="tableTH">Bilan</th>
									  <th class="tableTH">Nom </th>
									  <th class="tableTH">Prenom</th>
									  <th class="tableTH">Détail des médicaments</th>

									 </tr>' ;

$cpt = 0;
foreach ($execTableauCR as $unCR)
	{
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unCR['rap_num'].'</td>
	<td class="tableTD">'.$unCR['rap_date_visite'].'</td>
	<td class="tableTD">'.$unCR['rap_date'].'</td>
	<td class="tableTD">'.$unCR['rap_bilan'].'</td>
	<td class="tableTD">'.$unCR['cll_nom'].'</td>
	<td class="tableTD">'.$unCR['cll_prenom'].'</td>
	<td class="tableTD"><input id="button"  value="Visualiser"  name="'.$unCR['rap_num'].'"  type="submit"/></td>';
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