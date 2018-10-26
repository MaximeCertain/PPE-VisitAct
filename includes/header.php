<!DOCTYPE html>
<html lang="fr">

<head>
	<title>GSB | Secteur visites</title>
	<!--FAVICON-->
	<link rel="icon" href="includes/img/keyboard.ico" type="image/x-icon">
	<link rel="shortcut icon" href="includes/img/keyboard.ico" type="image/x-icon" />
	<!--META-->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="description" content="Your description">
	<meta name="keywords" content="Your keywords">
	<meta name="author" content="Your name">
	<!--CSS-->
	<link rel="stylesheet" href="includes/css/bootstrap.css">
	<link rel="stylesheet" href="includes/css/style.css">
	<link rel="stylesheet" href="includes/css/camera.css">
	<!-- <link rel="stylesheet" href="includes/css/sform.css"> -->
	<link rel="stylesheet" href="includes/css/animate.css">
	<!--JS-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="includes/js/sForm.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	<script src="includes/js/jquery.js"></script>
	<script src="includes/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="includes/js/camera.min.js"></script>

    <script src="includes/js/fonctions.js"></script>
	<script>
		jQuery(document).ready(function () {
			jQuery('.camera_wrap').camera({
				pagination: true,
				navigation: false,
				navigationHover: false,
				loaderOpacity: '0',
				fx: 'simpleFade',
				height: '33.9%',
				minHeight: '500px'
			});
		});
	</script>
	
		<!--[if (gt IE 9)|!(IE)]><!-->
	<script src="js/wow/wow.js"></script>
	<script>
			$(document).ready(function () {			 
					if ($('html').hasClass('desktop')) {
							new WOW().init();
					}	 
			});
	</script>
</head>
<!--========================================================
                         	HEADER
	=========================================================-->
	<header id="header">
		<div id="stuck_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="header_top">
							<div class="left_side">
                            	<?php
								if (!isset($_SESSION['CLL_MATRICULE']))
								echo '<a href="./" class="brand">' ;
								else
								//echo '<a href="includes/modele/deconnexion.php" class="brand">' ;
								echo '<a href="#" class="brand">' ;   
								?>
								<span class="brand_logo">
									<img src="includes/img/logoGSB.png" alt="Logo GSB" height="123" width="200">
								</span>
									<div class="wrapper">
										<span class="brand_slogan">Secteur visites</span>
                                        <?php
										if (isset($_SESSION['CLL_NOM']))
										echo '
										<span class="brand_slogan2">'.$_SESSION['CLL_NOM'].' - Déconnexion</span>' ;
										else
										echo '
										<span class="brand_slogan2"></span>' ;
										?>
									</div>
								</a>
							</div>
							<div class="right_side">
								<?php
								if (isset($_SESSION['ident']))
									require "vues/v_menu.php" ;
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header> 