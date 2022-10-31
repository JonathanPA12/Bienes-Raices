<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Condominios</title>
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
                $query="SELECT CON.ID_CONDO,FIL.NOMBRE,CON.CANT_APART,CON.DESCRIPCION FROM CONDOMINIOS CON JOIN FILIALES FIL ON CON.ID_FILIAL=FIL.ID_FILIAL WHERE ID_CONDO='$id'";
                $stid=oci_parse($conexion,$query);
                $r = oci_execute($stid);
                    $fila=oci_fetch_array($stid,OCI_ASSOC);
                        
						print' <form action="procesos/editCondo.php" method="POST">
                                <div class="row">
                                    <div class="col-12 col-md-6 mb-3">
                                       <label for="id" class="form-label">Identificador</label>
                                       <input type="text" class="form-control" name="id" value="'.$fila['ID_CONDO'].'">
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
                                        <label for="cant" class="form-label">Cantidad de apartamentos</label>
                                        <input type="text" class="form-control"  name="cant" value="'.$fila['CANT_APART'].'">
                                    </div>
                                </div>
                                <div class="row">
                                <div class="col-12 col-md-6 mb-3">
                                    <label for="descrip" class="form-label">Descricpión</label>
                                    <input type="text" class="form-control"  name="descrip" value="'.$fila['DESCRIPCION'].'">
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