<div id="content">
	<div class="block-5 bg-1  indent-6">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<?php include ("includes/modele/connect_bdd.php");
				 ?>
<div style="margin-left:25%;">
<H3>Ajout d'une activité complémentaire</H3> <br>
<form method="post" action="index.php?uc=saisieAC&action=enregistrer">
<label>Date</label><input style="margin-left:16.5%;" type="date" name="dateAC"><br>
<label>Lieu</label><input style="margin-left:18%;" type="text" name="lieuAC"><br>
<label>Theme</label><input style="margin-left:14.12%;" type="text" name="themeAC"><br>
<label>Budget Estimé (en euros)</label><input style="margin-left:6%;" type="text" name="budgetAC"><br>


<?php // <label>Practicien Invité</label><select style="margin-left:18%;" value="PracticienNum" name="practiciennum">
//foreach ($lesPracticiens as $lePracticien)
{
//	if($lePracticien['pra_num'])
	{
//		echo "<option selected value =".$lePracticien['pra_num'].">".$lePracticien['pra_nom']." ".$lePracticien['pra_prenom']."</option>";
	}
//	else
	{
//				echo "<option value =".$lePracticien['pra_num'].">".$lePracticien['pra_nom']." ".$lePracticien['pra_prenom']."</option>";
	}
} ?>
	<?php //</select><br>
//<label>Collaborateur</label>
//<select style="margin-left:18%;" value="collaborateurNum" name="collaborateurNum">
//		 foreach ($lesCollaborateurs as $unCollaborateur)
		 {
//		 	if ($unCollaborateur['cll_matricule'])
		 		{
//		 			echo "<option selected value =".$unCollaborateur['cll_matricule'].">".$unCollaborateur['cll_nom']." ".$unCollaborateur['cll_prenom']."</option>";
		 		}
//		 		else
		 		{
//		 					 			echo "<option value =".$unCollaborateur['cll_matricule'].">".$unCollaborateur['cll_nom']." ".$unCollaborateur['cll_prenom']."</option>";
		 	}
		 }
	 ?>
</select><br>
<input type="button" name="button" style="background-color:blue; color:white; border-radius:20px; width:120px; height: 50px; margin-left: 80px; " value="Enregistrer" class="button"  onclick="submit()"/></form>
	</div>
	</div>
	</div>
	</div>
	</div>