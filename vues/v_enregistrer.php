<div id="contentPraSaisir">
	<div class="block-3 bg-1">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=enregistrer&action=enregistrer">
				<div class="form-group col-md-4">
					<label>Matricule</label>
					<input type="text" name="matricule" class="form-control">
				</div>	
				<div class="form-group col-md-4">
					<label>Nom</label>
					<input type="text" name="nom" class="form-control">
				</div>
				<div class="form-group col-md-4">
					<label>Prénom</label>
					<input type="text" name="prenom" class="form-control">
				</div>
				<div class="form-group col-md-6">
					<label>Date d'embauche</label>
					<input type="date" name="date" class="form-control">
				</div>
				<div class="form-group col-md-6">
            		<label>Région</label>
						<select name="region" class="form-control">
							<option value="all">Tous</option>
							<?php
							foreach($lesRegions as $uneRegion) 
							{
								echo '<option value="'.$uneRegion['reg_code'].'">'.$uneRegion['reg_nom'] ;
							}
							?>
						</select>
				</div>

				<div class="form-group">
					<!--<input class="btn btn-success" type="submit" name="envoyer" value="Ajouter" onclick="submit()">-->
					<button type="button" class="btn btn-success btn-lg" type="submit" name="envoyer" value="Ajouter" onclick="submit()">Ajouter</button>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>