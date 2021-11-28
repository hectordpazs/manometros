<?php
	include 'conexion.php';

	ModificarPozo($_POST['id_pozo'], $_POST['medicion'], $_POST['fecha'], $_POST['no']);

	function ModificarPozo($id_pozo, $medicion, $fecha, $no)
	{
		include 'conexion.php';
		$sentencia="UPDATE pozo SET id_pozo='".$id_pozo."', medicion= '".$medicion."', fecha='".$fecha."' WHERE no='".$no."' ";
		mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Pozo Modificado exitosamente");
	window.location.href='index.php';
</script>