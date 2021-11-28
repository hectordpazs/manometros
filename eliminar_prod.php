<?php
	

	EliminarPozo($_GET['no']);

	function EliminarPozo($no)
	{
		include "conexion.php";
		$sentencia="DELETE FROM pozo WHERE no='".$no."' ";
		mysqli_query($connection,$sentencia);
	}
?>

<script type="text/javascript">
	alert("Pozo Eliminado exitosamente");
	window.location.href='index.php';
</script>