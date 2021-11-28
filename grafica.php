<?php include "conexion.php" ; ?>
<?php 

include 'conexion.php';

            

            $consulta=ConsultarPozo($_GET['no']);

            function ConsultarPozo($no_po)
            {
              include 'conexion.php';
              $sentencia="SELECT * FROM pozo WHERE no='".$no_po."' ";
              $result = mysqli_query($connection,$sentencia);
              $filas=mysqli_fetch_row($result);
              if(isset($filas)){
                return [
                    $filas[1],
                    $filas[2],
                    $filas[3]
                  ];}
              }
              
                
            ?>
                    
<html>
  <head>
    
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Fecha', 'ID', 'Medicion'],
          ['<?php echo $consulta[3] ; ?>',<?php echo $consulta[1] ; ?>,<?php echo $consulta[2] ; ?>],
                    
        ]);

        var options = {
          title: 'Company Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <input type="hidden" name="no" value="<?php echo $_GET['no']?> ">
    <div id="curve_chart" style="width: 900px; height: 500px"></div>
  </body>
</html>
