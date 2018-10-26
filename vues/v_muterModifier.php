<div id="contentMed">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
					<form id="contact-form" method="POST" action="index.php?uc=muterModification&action=modifier">
						<fieldset style="border:1">
						<legend align = center> Muter un visiteur</legend>
						<table align = center>
						<?php
						foreach($execAfficherVisiteur as $leVisiteur)
						{
							
						
							echo'<form>
							  <div class="form-group row">
							    <label class="col-sm-2 col-form-label">Matricule</label>
							    <div class="col-sm-10">
							      <input type="text" class="form-control" name="numCll" value='.$leVisiteur['tra_cll_matricule'].' readonly>
							    </div>
							  </div>
							  <div class="form-group row">
							  	<label class="col-sm-2 col-form-label">Nom</label>
							    <div class="col-sm-10">
								  <input type="text" class="form-control" name="nom" value='.$leVisiteur['cll_nom'].' readonly>
								</div>
							  </div>
							  <div class="form-group row">
							  	<label class="col-sm-2 col-form-label">Prénom</label>
							    <div class="col-sm-10">
								  <input type="text" class="form-control" name="prenom" value='.$leVisiteur['cll_prenom'].' readonly>
								</div>
							  </div>
							  <div class="form-group row">
							  	<label class="col-sm-2 col-form-label">Région</label>
							    <div class="col-sm-10">
								<select value="region" class="form-control" name="region">'; 
			foreach($lesRegions as $laRegion)
			{
				if($laRegion['reg_code'] == $leVisiteur['tra_reg_code'])
				{
					echo"<option selected value=".$laRegion['reg_code'].">".$laRegion['reg_nom']."</option>";
				}
				else
				{
					echo"<option value=".$laRegion['reg_code'].">".$laRegion['reg_nom']."</option>";
				}
			}
		} ?>
									
								</select>
							</div>
						</div>
						<div class="col-md-3 mb-3" style="float:right">
						<input type="submit" class="form-control" name="ModifierCll" value="Modifier">
						</div>
						</fieldset>
					</form>
			</div>
		</div>
	</div>
</div>