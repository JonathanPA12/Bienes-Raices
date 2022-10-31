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
	        	$query="SELECT * FROM INGRESOS WHERE ID_VISIT=$id";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editIngreso.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id_visit" class="form-label">Cedula</label>
                                       <input type="text" class="form-control"  name="id_visit" value="'.$fila['ID_VISIT'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name="nombre" value="'.$fila['NOMBRE_VISIT'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="ape1" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" name="ape1" value="'.$fila['APE1'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="ape2" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" name="ape2" value="'.$fila['APE2'].'">
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
                                <label for="entrada" class="form-label">Ingreso</label>
                                <input type="text" class="form-control" name="entrada" value="'.$fila['ENTRADA'].'">
                            </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-md-6 mb-3">
                            <label for="salida" class="form-label">Salida</label>
                            <input type="text" class="form-control" name="salida" value="'.$fila['SALIDA'].'">
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
                                            <a href="verIngreso.php">
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