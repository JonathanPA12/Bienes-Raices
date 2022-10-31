<!DOCTYPE html>
<html lang="en">
<head>
    <title>Visitantes</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-sm table-bordered">
						<thead>
							<tr class="table-dark">
							    <th>Cédula</th>
								<th>Nombre</th>
								<th>Primer apellido</th>
								<th>Segundo apellido</th>
								<th>Actualizar</th>
						
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
							$query="SELECT * FROM VISITANTES";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($stid,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['ID_VISIT']."</td>
									<td>".$fila['NOMBRE_V']."</td>
									<td>".$fila['APELLIDO1']."</td>
									<td>".$fila['APELLIDO2']."</td>
									<td><a href='actualizarVisitante.php?id=".$fila['ID_VISIT']."'>Actualizar</a></td>
								
								</tr>";
							}
						?>		
					</tbody>
				</table>
				
			</div>
		</div>
			<div class="row">
					<div class="col-12 d-flex justify-content-center">
						<div>
							<a href="../home.php">
								<button type="submit" class="col-12 btn btn-primary">Atras</button>
							</a>
						</div>
					</div>
				</div>
	</div>
	<script src="../js/bootstrap.bundle.min.js"></script>
	
</body>
</html> 