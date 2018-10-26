<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=saisieAC&action=terminer">
					<input type="hidden" name="numAC" value="<?php echo $numAC;?>">
						<div class="contact-form-loader"></div>
						<fieldset>
						<h3>Practiciens Invités</h3>
<?php 
             echo '<center>
									<table class="table">
									<tr> 
									  <th class="tableTH" style="width: 10%;">Nom
									  </th>
									  <th class="tableTH" style="width: 15%;">Prénom</th>
									  <th class="tableTH">Inviter</th>
									 </tr>' ;
$cpt = 0;
foreach ($lesPracticiens as $unPracticien)
	{
	echo '<tr class="tableTR" style="'; if($cpt%2==0){echo('background-color: #e8e8e8;');}else{echo('background-color: #f2f2f2;');}echo'">';
	echo '<td class="tableTD">'.$unPracticien['pra_nom'].'</td>
	<td class="tableTD">'.$unPracticien['pra_prenom'].'</td>	  <td class="tableTD"> <input id="checkBox" name="'.$unPracticien['pra_num'].'"  type="checkbox"></td>'?>
	 <?php
	//'<td class="tableTD"><input type="checkbox" name="cbCollabo" value='".$ligne[$cpt]."'/></td>'
	echo '</tr>'; 
	$cpt++;	
	}
	echo '<input type="submit" value="Inviter les Practiciens" onclick="submit()"/>';
	//foreach ($lesCollaborateurs as $unCollaborateur)
	{
	//	if (isset($_POST['cb']))
	{
	//	ajoutParticipant($_POST['cb'],$numAc);
	} 
	}
	?>
			</fieldset>
			</form>
			</div>
			</div>
</div>
</div>