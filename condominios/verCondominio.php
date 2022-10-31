<!DOCTYPE html>
<html lang="en">
<head>
    <title>Condominios</title>
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
							    <th>Identificador condominio</th>
								<th>Filial</th>
								<th>Cantidad de apartamentos</th>
								<th>Descripcion</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
							$query="SELECT CON.ID_CONDO,FIL.NOMBRE,CON.CANT_APART,CON.DESCRIPCION FROM CONDOMINIOS CON INNER JOIN FILIALES FIL ON CON.ID_FILIAL=FIL.ID_FILIAL";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($stid,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['ID_CONDO']."</td>
									<td>".$fila['NOMBRE']."</td>
									<td>".$fila['CANT_APART']."</td>
									<td>".$fila['DESCRIPCION']."</td>
									<td><a href='actualizarCondo.php?id=".$fila['ID_CONDO']."'>Actualizar</a></td>
									<td><a href='eliminarCondo.php?id=".$fila['ID_CONDO']."'>Eliminar</a></td>
							
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