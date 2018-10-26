<div id="contentPraSaisir">
	<div class="block-3 bg-1">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=budget&action=budget">
				<div class="form-group">
					<label>Région</label>
						<select name="region" class="form-control">
							<option value="all">Tous</option>
							<?php
							foreach($lesRegions as $uneRegion) 
							{
								echo '<option value="'.$uneRegion['reg_code'].'">'.$uneRegion['reg_nom'];
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
						<label>Budget</label>
						<input type="text" name="budget" class="form-control">
					</div>
					<div class="form-group col-md-6">
						<label>Année</label>
						<input type="text" name="annee" class="form-control">
					</div>
					<div class="form-group">
						<input type="submit" name="envoyer" value="Ajouter" onclick="submit()">
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>