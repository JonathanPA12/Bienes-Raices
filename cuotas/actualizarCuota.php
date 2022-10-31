<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tipo cuotas</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<div class="row mt-3">
			<div class="col">
                <?php
                
                $conexion = oci_connect("RESIDENCIAL", "root123", "localhost/XE");
            	if(isset($_GET['id'])){
	        	$id=$_GET['id'];
	        	require('../connect.php');
							$query="SELECT * FROM TIPO_CUOTAS WHERE TIPO_CUOTA='$id'";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							$fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editCuota.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id" class="form-label">Identificador</label>
                                       <input type="text" class="form-control" name="id" value="'.$fila['TIPO_CUOTA'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="descripcion" class="form-label">Tipo de cuota</label>
                                        <input type="text" class="form-control" name="descripcion" value="'.$fila['DESCRIP'].'">
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
                                            <a href="verCuota.php">
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

	
