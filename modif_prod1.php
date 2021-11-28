<?php
  
  include 'conexion.php';

  $consulta=ConsultarPozo($_GET['no']);

  function ConsultarPozo($no_prod)
  {
    include 'conexion.php';
    $sentencia="SELECT * FROM pozo WHERE no='".$no_prod."' ";
    $result = mysqli_query($connection,$sentencia);
  
    $filas=mysqli_fetch_row($result);
    return [
      $filas[1],
      $filas[2],
      $filas[3]
    ];

  }


?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Pozo</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="images/swirl.png" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Pozo</h1> </span>
  		<br>
	  <form action="modif_prod2.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
      <input type="hidden" name="no" value="<?php echo $_GET['no']?> ">
  		<label>Id Pozo: </label>
  		<input type="text" id="id_pozo" name="id_pozo"; value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Medicion: </label>
  		<input type="number" id="medicion" name="medicion" value="<?php echo $consulta[1] ?>"><br>
  		
  		<label>Fecha: </label>
  		<input type="date" id="fecha" name="fecha" value="<?php echo $consulta[2] ?>"><br>
  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="images/swirl2.png" id="img2">
  	</div>

</div>


</body>
</html>