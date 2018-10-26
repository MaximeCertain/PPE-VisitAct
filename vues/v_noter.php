<div id="contentPraSaisir">
	<div class="block-3 bg-1">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=noter&action=noter">
				<div class="form-row">
				<div class="form-group col-md-6">
					<label>Matricule</label>
						<select name="matricule" class="form-control">
							<option value="all">Tous</option>
							<?php
							foreach($lesMatricules as $unMatricule) 
							{
								echo '<option value="'.$unMatricule['cll_matricule'].'">'.$unMatricule['cll_nom']. " " .$unMatricule['cll_prenom'];
							}
							?>
						</select>
					</div>
					<div class="form-group col-md-6">
					<label>Note</label>
					<select name="note" class="form-control">
					  <option value="0">0</option>
					  <option value="1">1</option>
					  <option value="2">2</option>
					  <option value="3">3</option>
					  <option value="4">4</option>
					  <option value="5">5</option>
					  <option value="6">6</option>
					  <option value="7">7</option>
					  <option value="8">8</option>
					  <option value="9">9</option>
					  <option value="10">10</option>
					</select>
					</div>

					<div class="form-group">
						<label>Bilan</label>
						<textarea name="bilan" class="form-control" rows="3"></textarea>
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