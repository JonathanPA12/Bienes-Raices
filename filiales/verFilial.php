<!DOCTYPE html>
<html lang="en">
<head>
    <title>FILIALES</title>
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
							    <th>Identificador</th>
								<th>Nombre</th>
								<th>Provincia</th>
								<th>Canton</th>
								<th>Distrito</th>
								<th>Telefono</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
							$query="SELECT FIL.ID_FILIAL,FIL.NOMBRE,PRO.N_PROVINCIA,CAN.N_CANTON,DIS.N_DIS,FIL.TELEFONO FROM RESIDENCIAL.FILIALES FIL 
							JOIN RESIDENCIAL.PROVINCIA PRO ON (FIL.PROVINCIA=PRO.ID_PROVINCIA)
							JOIN RESIDENCIAL.CANTON CAN ON (FIL.CANTON=CAN.ID_CANTON) JOIN RESIDENCIAL.DISTRITO DIS ON (FIL.DISTRITO=DIS.ID_DISTRITO)";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($stid,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['ID_FILIAL']."</td>
									<td>".$fila['NOMBRE']."</td>
									<td>".$fila['N_PROVINCIA']."</td>
									<td>".$fila['N_CANTON']."</td>
									<td>".$fila['N_DIS']."</td>
									<td>".$fila['TELEFONO']."</td>
									<td><a href='actualizarFilial.php?id=".$fila['ID_FILIAL']."'>Actualizar</a></td>
									<td><a href='eliminarFilial.php?id=".$fila['ID_FILIAL']."'>Eliminar</a></td>
							
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