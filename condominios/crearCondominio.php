<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="..css/estilos.css">
    <title>Agregar Condominio</title>
</head>
<body>
	<main>
		<div class="container my-5 p-4">
			<div class="row mt-3">
				<div class="col">
					<form action="procesos/guardarCondo.php" method="POST">
						<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="id_condo" class="form-label">Identificador</label>
								<input type="number" class="form-control" placeholder="01" name="id_condo" required>
							</div>
						</div>
						<div class="row">
						    <div class="col-12 col-md-6 mb-3">
					        	<label for="filial" class="form-label">Filial</label>
						        <select name="filial" class="form-select" id="select_box">
						            <?php 
							  $conexion = oci_connect("RESIDENCIAL", "root123", "localhost/XE");
							  $query = "SELECT NOMBRE FROM FILIALES";
							  $stid=oci_parse($conexion,$query);
							  $r = oci_execute($stid);
						             	while(($row = oci_fetch_array($stid, OCI_BOTH))){
							          	echo'<option value="'.$row[0].'">'.$row[0]; echo'</option>';
							}
						
						?>  
						</select>
						</div>
					</div>
					<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="cant" class="form-label">Cantidad de Apartamentos</label>
								<input type="number" class="form-control" placeholder="20" name="cant" required>
							</div>
						</div>
					<div class="row">
							<div class="col-12 col-md-6 mb-3">
								<label for="descripcion" class="form-label">Descripcion</label>
								<input type="text" class="form-control" placeholder="INGRESE UNA DESCRIPCION" name="descripcion" required>
							</div>
						</div>
						<div class="row">
							<div class="col-6 d-flex justify-content-center">
								<div>
									<button type="submit" class="col-12 btn btn-primary">Agregar</button>
								</div>
							</div>
						</div>
					</form>
					<div class="row mt-3">
						<div class="col-6 d-flex justify-content-center">
							<div>
								<a href="../home.php">
									<button type="submit" class="col-12 btn btn-primary">Atras</button>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
    <script src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>