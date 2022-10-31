<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/estilos.css">
	<title>Guardar Filial</title>
</head>
<body>
<?php
			try{
			
				require('../../connect.php');
				$id_filial=$_POST['id_filial'];
				$nombre=$_POST['nombre'];
				$provincia=$_POST['provincia'];
				$canton=$_POST['canton'];
				$distrito=$_POST['distrito'];
				$telefono=$_POST['telefono'];
			
				$query=oci_parse($conexion,"SELECT ID_PROVINCIA FROM PROVINCIA WHERE N_PROVINCIA = '$provincia'");
				$stid=oci_execute($query);
				$p=oci_fetch_array($query,OCI_ASSOC);
				$p = (int)$p['ID_PROVINCIA'];

				$query=oci_parse($conexion,"SELECT ID_CANTON FROM CANTON WHERE N_CANTON = '$canton'");
				$stid=oci_execute($query);
				$c=oci_fetch_array($query,OCI_ASSOC);
				$c = (int)$c['ID_CANTON'];

				$query=oci_parse($conexion,"SELECT ID_DISTRITO FROM DISTRITO WHERE N_DIS = '$distrito'");
				$stid=oci_execute($query);
				$d=oci_fetch_array($query,OCI_ASSOC);
				$d = (int)$d['ID_DISTRITO'];


                $s = oci_parse($conexion,"CALL SP_INS_FILIAL ('" . $id_filial . "','" . $nombre . "','" . $p . "','" . $c . "','" . $d . "','" . $telefono . "')");

		        $r = oci_execute($s,OCI_COMMIT_ON_SUCCESS);
		
			if($s){
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-success d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
								<div>
									Filial agregada!
								</div>
							</div>
						</div>
					</div>    		
				';
			}else{
				throw new Exception();
			}
			
			} catch (Exception $e) {
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-danger d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<div>
									Error al agregar filial!
									<script src="../../js/bootstrap.bundle.min.js"></script>
								</div>
							</div>
						</div>
					</div>
				';
			} finally {
				echo '
				<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../crearFilial.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
				';
			}
		
	?>
		<script src="../../js/bootstrap.bundle.min.js"></script>
</body>
</html>