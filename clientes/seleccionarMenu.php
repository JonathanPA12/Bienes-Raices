<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-sm table-bordered">
						<caption>Datos Estudiante</caption>
						<thead>
							<tr class="table-dark">
							    <th>ID</th>
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Provincia</th>
								<th>Actualizar</th>
								<th>Eliminar</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						
						require('../connect.php');
							$query="SELECT ID_CLI,NOMBRE,APE1,DESCRIPCION FROM CLIENTES INNER JOIN PROVINCIAS ON CLIENTES.ID_PROVINCIA = PROVINCIAS.ID_PROVINCIA";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							while($fila=oci_fetch_array($r,OCI_ASSOC)){
								print "<tr>
								    <td>".$fila['ID_CLI']."</td>
									<td>".$fila['NOMBRE']."</td>
									<td>".$fila['APE1']."</td>
									<td>".$fila['DESCRIPCION']."</td>
									<td><a href='actualizarEst.php?id_cli=".$fila['ID_CLI']."'>Actualizar</a></td>
									<td><a href='eliminarEst.php?id_cli=".$fila['ID_CLI']."'>Eliminar</a></td>
							
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
							<a href="crearEst.php">
								<button type="submit" class="col-12 btn btn-primary">Atras</button>
							</a>
						</div>
					</div>
				</div>
	</div>
    <a href="../logout.php">Cerrar sesion</a>
	<script src="../js/bootstrap.bundle.min.js"></script>
	
</body>
</html> 