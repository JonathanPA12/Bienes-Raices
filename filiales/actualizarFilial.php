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
	        	$query="SELECT FIL.ID_FILIAL,FIL.NOMBRE,PRO.N_PROVINCIA,CAN.N_CANTON,DIS.N_DIS,FIL.TELEFONO FROM RESIDENCIAL.FILIALES FIL 
                JOIN RESIDENCIAL.PROVINCIA PRO ON (FIL.PROVINCIA=PRO.ID_PROVINCIA)
                JOIN RESIDENCIAL.CANTON CAN ON (FIL.CANTON=CAN.ID_CANTON) JOIN RESIDENCIAL.DISTRITO DIS ON (FIL.DISTRITO=DIS.ID_DISTRITO) WHERE ID_FILIAL=$id";
							$stid=oci_parse($conexion,$query);
							$r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editFilial.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id" class="form-label">Identificador</label>
                                       <input type="text" class="form-control" placeholder=123456789" name="id" value="'.$fila['ID_FILIAL'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="nombre" class="form-label">Filial</label>
                                        <input type="text" class="form-control"  name="nombre" value="'.$fila['NOMBRE'].'">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="provincia" class="form-label">Provincia</label>
                                        <input type="text" class="form-control"  name="provincia" value="'.$fila['N_PROVINCIA'].'">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="canton" class="form-label">Canton</label>
                                    <input type="text" class="form-control"  name="canton" value="'.$fila['N_CANTON'].'">
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                        <label for="distrito" class="form-label">Distrito</label>
                                        <input type="text" class="form-control"  name="distrito" value="'.$fila['N_DIS'].'">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="text" class="form-control"  name="telefono" value="'.$fila['TELEFONO'].'">
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
                                            <a href="verFilial.php">
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
	
