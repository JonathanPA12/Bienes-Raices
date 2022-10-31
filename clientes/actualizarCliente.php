<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Estudiantes</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row mt-3">
			<div class="col">
                <?php
                
                require('../connect.php');
            	if(isset($_GET['id'])){
	        	$id=$_GET['id'];
	        	$query="SELECT *FROM CLIENTES WHERE ID_CLIENTE=$id";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editCliente.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id_cliente" class="form-label">Cedula</label>
                                       <input type="text" class="form-control"  name="id_cliente" value="'.$fila['ID_CLIENTE'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="id_apart" class="form-label">Apartamento</label>
                                        <input type="text" class="form-control" name="id_apart" value="'.$fila['ID_APART'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="'.$fila['NOMBRE'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="ape1" class="form-label">Primer apellido</label>
                                        <input type="text" class="form-control" name="ape1" value="'.$fila['APE1'].'">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="ape2" class="form-label">Segundo apellido</label>
                                    <input type="text" class="form-control" name="ape2" value="'.$fila['APE2'].'">
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-12 col-md-6 mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="text" class="form-control" name="telefono" value="'.$fila['TELEFONO'].'">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" value="'.$fila['EMAIL'].'">
                        </div>
                        </div>
                                <div class="row">
                                    <div class="col-6 d-flex justify-content-center">
                                        <div>
                                            <button type="submit" class="col-12 btn btn-primary">Actualizar</button>
                                        </div>
                                    </div>
                                </div>
                            </form>';
                            echo '
                            <div class="row mt-3">
                                    <div class="col-6 d-flex justify-content-center">
                                        <div>
                                            <a href="verCliente.php">
                                                <button type="submit" class="col-12 btn btn-primary">Atras</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            ';
                    }else{
                        echo "Ocurrio un error inesperado";
                    }
                ?>			
			</div>
		</div>
	</div>
	<script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>

	


	
