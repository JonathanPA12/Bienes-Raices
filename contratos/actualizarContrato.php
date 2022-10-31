<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contratos</title>
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
                $query="SELECT CON.ID_CONTRATO,CON.ID_FILIAL,CON.ID_CLIENTE,CON.ID_DUENO,CONT.CONTRATO,TIPO.DESCRIP FROM RESIDENCIAL.CONTRATOS CON 
                JOIN RESIDENCIAL.TIPO_CONTRATOS CONT ON (CON.TIPO_CONTRATOS=CONT.TIPO_CONTRATOS)
                JOIN RESIDENCIAL.TIPO_CUOTAS TIPO ON (CON.TIPO_CUOTA=TIPO.TIPO_CUOTA) WHERE ID_CONTRATO='$id'";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
							$fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editContrato.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id" class="form-label">Contrato</label>
                                       <input type="text" class="form-control" name="id" value="'.$fila['ID_CONTRATO'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="filial" class="form-label">Filial</label>
                                        <input type="text" class="form-control"  name="filial" value="'.$fila['ID_FILIAL'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="cliente" class="form-label">Cliente</label>
                                        <input type="text" class="form-control" name="cliente" value="'.$fila['ID_CLIENTE'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="dueno" class="form-label">Encargado</label>
                                        <input type="text" class="form-control" name="dueno" value="'.$fila['ID_DUENO'].'">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="contrato" class="form-label">Tipo contrato</label>
                                    <input type="text" class="form-control" name="contrato" value="'.$fila['CONTRATO'].'">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="cuota" class="form-label">Tipo cuota</label>
                                    <input type="text" class="form-control" name="cuota" value="'.$fila['DESCRIP'].'">
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
                                            <a href="verContrato.php">
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

<!-- 
                                        <label for="password" class="form-label">Contraseña</label>
                                        <input type="text" class="form-control" placeholder="123" id="password" value="'.$fila['password'].'">
                                        -->
	
