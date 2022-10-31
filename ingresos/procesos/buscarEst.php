<!DOCTYPE html>
<html lang="en">
<body>
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<div class="table-responsive">
					<table class="table table-striped table-hover table-sm table-bordered">
						<caption>Datos del cliente</caption>
						<thead>
							<tr class="table-dark">
								<th>Nombre</th>
								<th>Apellido</th>
								<th>Telefono</th>
							
							</tr>
						</thead>
					<tbody>
						<?php
						$nombre=$_POST['nombre'];
						require('../connect.php');
                        $query="SELECT * FROM CLIENTES WHERE NOMBRE=$nombre";
                        $objPersona=null;
                        $stid=oci_parse($conexion,$query);
                        $r = oci_execute($stid);

                     
                            if(oci_num_rows($stid)==1){
                             $fila=oci_fetch_array($stid,OCI_ASSOC)
                         
                        
                        print <tr>
                        <td>".$fila['NOMBRE']."</td>
                        <td>".$fila['APE1']."</td>
                        <td>".$fila['TELEFONO']."</td>
                
                         </tr>;
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