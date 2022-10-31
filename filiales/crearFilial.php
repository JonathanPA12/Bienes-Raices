<?php

    $conexion = oci_connect("RESIDENCIAL", "root123", "localhost/XE");
	$query = "SELECT N_PROVINCIA FROM PROVINCIA";
	$stid=oci_parse($conexion,$query);
	$r = oci_execute($stid);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="..css/estilos.css">
    <title>Agregar Filial</title>
</head>
<body>
	<main>
		<div class="container my-5 p-4">
			<div class="row mt-3">
				<div class="col">
					<form action="procesos/guardarFilial.php" method="POST">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="id_filial" class="form-label">Identificador</label>
								<input type="text" class="form-control" placeholder="01" name="id_filial" required>
							</div>
						</div>
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="nombre" class="form-label">Nombre de la filial</label>
								<input type="text" class="form-control" placeholder="MONTEMAR" name="nombre" required>
							</div>
						</div>
						<div class="row">
						    <div class="col-12 col-md-6 mb-3">
					        	<label for="provincia" class="form-label">Provincia</label>
						        <select name="provincia" class="form-select" id="select_box">
						            <?php 
							
						             	while(($row = oci_fetch_array($stid, OCI_BOTH))){
							          	echo'<option value="'.$row[0].'">'.$row[0]; echo'</option>';
							}
						
						?>  
						</select>
						</div>
					</div>
					<div class="row">
						    <div class="col-12 col-md-6 mb-3">
					        	<label for="canton" class="form-label">Canton</label>
						        <select name="canton" class="form-select" id="select_box">
						            <?php 
							$conexion = oci_connect("RESIDENCIAL", "root123", "localhost/XE");
							$query = "SELECT N_CANTON FROM CANTON";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
						             	while(($row = oci_fetch_array($stid, OCI_BOTH))){
							          	echo'<option value="'.$row[0].'">'.$row[0]; echo'</option>';
							}
						
						?>  
						</select>
						</div>
					</div>
					<div class="row">
						    <div class="col-12 col-md-6 mb-3">
					        	<label for="distrito" class="form-label">Distrito</label>
						        <select name="distrito" class="form-select" id="select_box">
						            <?php 
							$conexion = oci_connect("RESIDENCIAL", "root123", "localhost/XE");
							$query1 = "SELECT N_DIS FROM DISTRITO";
							$sti=oci_parse($conexion,$query1);
							$r = oci_execute($sti);
						             	while(($row = oci_fetch_array($sti, OCI_BOTH))){
							          	echo'<option value="'.$row[0].'">'.$row[0]; echo'</option>';
							}
						
						?>  
						</select>
						</div>
					</div>
					<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="telefono" class="form-label">Telefono</label>
								<input type="number" class="form-control" placeholder="24834567" name="telefono" required>
							</div>
						</div>
						<div class="row">
							<div class="col-6 d-flex justify-content-center">
								<div>
									<button type="submit" class="col-12 btn btn-primary">Agregar</button>
								</div>
							</div>
						</div>
					</form>
					<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../home.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>