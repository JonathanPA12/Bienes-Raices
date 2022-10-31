<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Apartamentos</title>
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
	        	$query="SELECT * FROM APARTAMENTOS WHERE ID_APART=$id";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editApart.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id_apart" class="form-label">Id apartamento</label>
                                       <input type="text" class="form-control"  name="id_apart" value="'.$fila['ID_APART'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="id_condo" class="form-label">Id condominio</label>
                                        <input type="text" class="form-control" name="id_condo" value="'.$fila['ID_CONDO'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="piso" class="form-label">Número de piso</label>
                                        <input type="text" class="form-control" name="piso" value="'.$fila['NO_PISO'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="descripcion" class="form-label">Descripcion</label>
                                        <input type="text" class="form-control" name="descripcion" value="'.$fila['DESCRIPCION'].'">
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
                                            <a href="verApart.php">
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

	
