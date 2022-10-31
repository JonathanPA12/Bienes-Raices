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
	<title>Guardar Cantón</title>
</head>
<body>
<?php
			try{
				require('../../connect.php');
				$id_cont=$_POST['id'];
				$id_filial=$_POST['filial'];
				$id_cliente=$_POST['cliente'];
				$id_dueño=$_POST['dueno'];
				$cont=$_POST['contrato'];
				$cuota=$_POST['cuota'];

				$query=oci_parse($conexion,"SELECT TIPO_CONTRATOS FROM TIPO_CONTRATOS WHERE CONTRATO = '$cont'");
				$stid=oci_execute($query);
				$p=oci_fetch_array($query,OCI_ASSOC);
				$p = (int)$p['TIPO_CONTRATOS'];

				$query=oci_parse($conexion,"SELECT TIPO_CUOTA FROM TIPO_CUOTAS WHERE DESCRIP = '$cuota'");
				$stid=oci_execute($query);
				$c=oci_fetch_array($query,OCI_ASSOC);
				$c = (int)$c['TIPO_CUOTA'];
				
		
				$s = "CALL SP_UPD_CONTRATOS ('" . $id_cont . "','" . $id_filial . "','" . $id_cliente . "','" . $id_dueño . "','" . $p . "','" . $c . "')";
				$stid=oci_parse($conexion,$s);
			 
				$r = oci_execute($stid,OCI_COMMIT_ON_SUCCESS);
	
		
			if($r){
				echo '
					<div class="row">
						<div class="col-12 col-md-6 mb-3">
							<div class="alert alert-success d-flex align-items-center" role="alert">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
								<div>
									Actualizacion exitosa!
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
									Ocurrio un error!
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
								<a href="../verContrato.php">
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