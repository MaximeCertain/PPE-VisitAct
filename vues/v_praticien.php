<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script>
function modifier(id) 
{
  var id_region = document.getElementById('region_'+id).value;
 
  var tdId = "#cmb_"+id;
  $.ajax
  ({            
    type: "POST",            
    url: "transfererC.php",      
    data:{cll_matricule: cll_matricule, tra_reg_code: tra_reg_code, 
    dataType: "html",            
    success: function(msg)
    {     
      if (msg =="ko") 
      {
        alert("Paramètres mal passés !!!");
        return;
      }
   $(tdId).html(msg);    
    }        
 }); 
}
</script>
<div id="contentPraSaisir">
	<div class="block-3 bg-1">
		<div class="container">
			<div class="row">
				<form id="contact-form" method="POST" action="index.php?uc=praticien&action=afficher">
					<div class="contact-form-loader">	</div>
					<fieldset>
						<label class="lblPRA">Type de praticien : </label>
						<select name="typePra" class="textbox">
							<option value="all">Tous</option>
							<?php
							foreach($lesTypes as $unType) 
							{
								echo '<option value="'.$unType['typ_code'].'">'.$unType['typ_libelle'] ;
							}
							?>
						</select>

						<br/><br/><br/><br/><a data-type="submit" name="formulaire" class="btn-default btn btn-2" onClick="submit('contact-form');"><span class="text">Afficher</span></a>

						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</div>