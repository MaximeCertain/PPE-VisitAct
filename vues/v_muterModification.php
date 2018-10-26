<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
					<form id="contact-form" method="POST" action="index.php?uc=muter2&action=modifier">
						<fieldset style="border:1">
						<legend align = center> Muter un visiteur</legend>
						<table align = center>
						<?php
						foreach($execAfficher as $uneMutation)
						{
							
							echo'<tr>
								<td><label> Matricule du visiteur : </label></td>
								<td><input type="text" name="numCR" value="'.$uneMutation['cll_matricule'].'" readonly> </td>
							</tr> 
							<tr>
								<td><label> Nom visiteur : </label></td>
								<td><input type="text" name="matricule" value="'.$uneMutation['cll_nom'].'" readonly </td>
							</tr> 
							<tr>
								<td><label> Prénom visiteur : </label></td>
								<td><input type="date" name="dateVisite" value="'.$uneMutation['cll_prenom'].'"></td>
							</tr> 
							<tr>
								<td><label> Région : </label></td>
								<td>
								<select value ="region" name="region">'?> <?php
			foreach($lesRegions as $uneRegion)
			{
				if($uneRegion['reg_code'] == $uneRegion['tra_reg_code'])
				{
					echo"<option selected value=".$uneRegion['reg_code'].">".$uneRegion['reg_nom']."</option>";
				}
				else
				{
					echo"<option value=".$uneRegion['reg_code'].">".$uneRegion['reg_nom']."</option>";
				}
			}
			?>
								</td>
							</table><br><br>
								<input type="submit" name="modifier" value="Modifier">
						</fieldset>	
							</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>