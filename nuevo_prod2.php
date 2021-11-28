<?php
	include 'conexion.php';

	NuevoPozo($_POST['id_pozo'], $_POST['medicion'], $_POST['fecha']);

	function NuevoPozo($id_pozo, $medicion, $fecha)
	{
		include 'conexion.php';
		echo $sentencia="INSERT INTO pozo (id_pozo, medicion, fecha) VALUES ('".$id_pozo."', '".$medicion."', '".$fecha."')";
		mysqli_query($connection,$sentencia);
		
	}
?>

<script type="text/javascript">
	alert("Pozo Ingresado exitosamente");
	window.location.href='index.php';
</script>