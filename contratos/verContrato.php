<!DOCTYPE html>
<html lang="en">
<head>
    <title>TIPOS DE CONTRATO</title>
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
								<th>Filial</th>
								<th>Cliente</th>
								<th>Encargado</th>
								<th>Tipo de contrato</th>
								<th>Tipo de cuota</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
						$query="SELECT CON.ID_CONTRATO,CON.ID_FILIAL,CON.ID_CLIENTE,CON.ID_DUENO,CONT.CONTRATO,TIPO.DESCRIP FROM RESIDENCIAL.CONTRATOS CON 
						JOIN RESIDENCIAL.TIPO_CONTRATOS CONT ON (CON.TIPO_CONTRATOS=CONT.TIPO_CONTRATOS)
						JOIN RESIDENCIAL.TIPO_CUOTAS TIPO ON (CON.TIPO_CUOTA=TIPO.TIPO_CUOTA)";
						    $stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($stid,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['ID_CONTRATO']."</td>
									<td>".$fila['ID_FILIAL']."</td>
									<td>".$fila['ID_CLIENTE']."</td>
									<td>".$fila['ID_DUENO']."</td>
									<td>".$fila['CONTRATO']."</td>
									<td>".$fila['DESCRIP']."</td>
								
									<td><a href='actualizarContrato.php?id=".$fila['ID_CONTRATO']."'>Actualizar</a></td>
									<td><a href='eliminarContrato.php?id=".$fila['ID_CONTRATO']."'>Eliminar</a></td>
							
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