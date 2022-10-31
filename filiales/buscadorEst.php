<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="UTF-8">
	<title>Buscador</title>
</head>
<body>
	<form action="buscadorEst.php" method="POST" autocomplete="off">
		<input type="text" name="nombre" placeholder="ingrese el nombre">
		<input type="submit" value="Consultar">
	</form>

	<?php
		if(isset($_POST['nombre'])){
			require('../connect.php');
			require('procesos/buscarEst.php');
		}
	?>
</body>
</html>