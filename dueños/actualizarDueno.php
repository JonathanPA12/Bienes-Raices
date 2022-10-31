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
                $query="SELECT DU.ID_DUENO,FI.NOMBRE,DU.ENCARGADO,DU.APE1,DU.APE2 FROM DUENOS DU JOIN FILIALES FI ON DU.ID_FILIAL=FI.ID_FILIAL WHERE ID_DUENO=$id";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editDueno.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id_dueno" class="form-label">Cedula Encargado</label>
                                       <input type="text" class="form-control"  name="id_dueno" value="'.$fila['ID_DUENO'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="filial" class="form-label">Filial</label>
                                        <input type="text" class="form-control" name="filial" value="'.$fila['NOMBRE'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="encargado" class="form-label">Encargado</label>
                                        <input type="text" class="form-control" name="encargado" value="'.$fila['ENCARGADO'].'">
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
                                            <a href="verDueno.php">
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