<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        /*var visiteNord = <?php $visiteNord; ?>
        var visiteEst = <?php $visiteEst; ?>
        var visiteParis = <?php $visiteParis; ?>
        var visiteOuest = <?php $visiteOuest; ?>
        var visiteSud = <?php $visiteSud; ?>*/

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Nord',    parseInt('<?php echo $visiteNord; ?>')],
          ['Est',      parseInt('<?php echo $visiteEst; ?>')],
          ['Paris centre',  parseInt('<?php echo $visiteParis; ?>')],
          ['Ouest', parseInt('<?php echo $visiteOuest; ?>')],
          ['Sud',    parseInt('<?php echo $visiteSud; ?>')]
        ]);

        var options = {
          title: 'Visites par secteur',
          is3D: true,
          backgroundColor: { fill:'transparent' }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div class="block-3 bg-1">
      <div class="container">
        <div class="row">
            <div class="col-sm-6">
              <div id="piechart_3d" style="width: 900px; height: 500px; "></div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>