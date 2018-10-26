<script type="text/javascript">
	google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
	 function drawChart()  
           {  
           	$cpt = 0;
                var data = google.visualization.arrayToDataTable([  
                          ['med_nomcommercial', 'nb'],<?php echo $data; ?>]
                          
                         );             var options = {  
                      title: 'Répartition des médicaments offerts de la région',
                      pieHole: 0.4, 
                      is3D: true
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);     
             }  </script>
<div id="contentMed">
	<div class="block-5 bg-1  indent-6"> 
		<div class="container">
			<div class="row">
				
					<!--<h3 class="title title-1">Authentification</h2>-->
				
           <br /><br />  
           <div style="width:900px;">  
                <h3 align="center">Statistiques des médicaments offerts de la région <strong><?php echo $RegionDelegue; ?> </strong></h3>  
                <br />  
                <div id="piechart" style="width: 1000px; height: 500px;"></div>  
           </div>  
      
				</div>
			</div>
</div>		</div>