<?php include "conexion.php" ; ?>
<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'Medicion'],
          <?php 
            $consulta=ConsultarPozo($_GET['id_pozo']);

            function ConsultarPozo($id_po)
            {
              include 'conexion.php';
              $sentencia="SELECT * FROM pozo WHERE id_pozo='".$id_po."' ";
              $result = mysqli_query($connection,$sentencia);
                while ($data = mysqli_fetch_array($result)){
                    $year = $data['fecha'];
                    $medicion = $data['medicion'];
            ?>
                    ['<?php echo $year ; ?>',<?php echo $medicion ; ?>],
                    <?php 
                    }}
                    ?>
        ]);

        var options = {
          title: 'Mediciones del Manometro para el pozo seleccionado por ID',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <input type="hidden" name="no" value="<?php echo $_GET['id_pozo']?> ">
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
