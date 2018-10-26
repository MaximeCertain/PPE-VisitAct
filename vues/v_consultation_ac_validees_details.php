<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST"  action="index.php?uc=authentification">
						<div class="contact-form-loader"></div>
						<fieldset>
						<h3>Les Praticiens invités à cette activité complémentaire</h3>
<?php
							echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom
									  </th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  
									 </tr>' ; 

$cpt = 0;
foreach ($execLesPracticiensInvites as $unPracticien)
	{
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unPracticien['pra_nom'].'</td>
	<td class="tableTD">'.$unPracticien['pra_prenom'].'</td>';

	echo '</tr>'; 
	$cpt++;
	}
	echo '</center></table>';							
?> 
<h3>Les collaborateurs participants à l'activité complémentaire</h3>
<?php
							echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom
									  </th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  
									 </tr>' ; 

$cpt = 0;
foreach ($execLesCollaborateursParticipants as $unCollaborateur)
	{
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unCollaborateur['cll_nom'].'</td>
	<td class="tableTD">'.$unCollaborateur['cll_prenom'].'</td>';

	echo '</tr>'; 
	$cpt++;
	}

	echo '</center></table>';							
?> 
			</fieldset>
			</form>
			</div>
			</div>
			</div>
			</div>