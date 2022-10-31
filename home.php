<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESIDENCIAL</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
   <!-- <link rel="stylesheet" href="~/css/site.css" /> -->
    <link rel="stylesheet" href="css/Menu.css" />
</head>
<body>

    <div class="navegacion">
        <nav>
            <ul>
                <li class="nav-item">
                    <a class="nav-link text-white" href="home.php">Inicio</a>
                </li>

                <li>
                    <a href="#">Gestion del Residencial <span class="icon icon-up-dir"></span></a>
                    <div class="submenu">
                        <div class="submenu-items">
                            <p>Encargados</p>
                            <ul>
                            <li class="nav-item">
                                    <a class="nav-link text-dark" href="dueños/verDueno.php">Ver encargados</a>
                                </li>                                
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Contratos</p>
                            <ul>
                            <li class="nav-item">
                                    <a class="nav-link text-dark" href="contratos/crearContrato.php">Crear contrato</a>
                                </li>  
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="contratos/verContrato.php">Ver contratos</a>
                                </li>
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Filiales</p>
                            <ul>
                            <li class="nav-item">
                                <a class="nav-link text-dark" href="filiales/verFilial.php">Ver filiales</a>
			                  	</li>
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Accesos</p>
                            <ul>
                            <li class="nav-item">
                                    <a class="nav-link text-dark" href="ingresos/crearIngreso.php">Registrar acceso al residencial</a>
                                </li>
                            <li class="nav-item">
                                    <a class="nav-link text-dark" href="ingresos/verIngreso.php">Ver Ingresos</a>
			                    	</li>

                            </ul>
                        </div>
                    </div>
                </li>
	           <li class="nav-item">
                  <li>
                    <a href="#">Gestión General <span class="icon icon-up-dir"></span></a>
                    <div class="submenu">
                        <div class="submenu-items">
                            <p>Filiales</p>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="filiales/crearFilial.php">Agregar filial</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="dueños/crearDueño.php">Agregar encargado de filial</a>
                                </li>                     
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Condominios</p>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="condominios/crearCondominio.php">Agregar condominios</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link text-dark" href="condominios/verCondominio.php">Ver condominios</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="apartamentos/crearApart.php">Agregar apartamentos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="apartamentos/verApart.php">Ver apartamentos</a>
			                    	</li>
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Clientes</p>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="clientes/crearCliente.php">Agregar clientes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="clientes/verCliente.php">Ver clientes</a>
			                    	</li>
                                    <li class="nav-item">
                                    <a class="nav-link text-dark" href="visitantes/verVisitante.php">Ver visitantes</a>
                                </li>
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Dirección</p>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="provincias/crearProvincia.php">Agregar provincia</a>
			                  	</li>
				              <li class="nav-item">
                                    <a class="nav-link text-dark" href="cantones/crearCanton.php">Agregar cantones</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="distritos/crearDistrito.php">Agregar distrito</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="provincias/verProvincia.php">Ver Provincias</a>
			                    	</li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="cantones/verCanton.php">Ver Cantones</a>
			                    	</li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="distritos/verDistrito.php">Ver Distritos</a>
			                    	</li>
                            </ul>
                        </div>
                        <div class="submenu-items">
                            <p>Contratos</p>
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="cuotas/crearCuota.php">Agregar tipo de cuotas</a>
                                </li>
				                <li class="nav-item">
                                    <a class="nav-link text-dark" href="cuotas/verCuota.php">Ver tipo de cuotas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="tcontratos/crearTContrato.php">Agregar tipo de contratos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="tcontratos/verTContrato.php">Ver tipo de contratos</a>
                                </li>
                            </ul>
                        </div>
                   
                        </div>
                    </div>
                </li>

        </nav>
    </div>
    <div><img src="img/2.jpg"style = "width:1230px;height:500px; padding-left:130px;" ></div>
    <footer class="border-top footer text-muted">
        <div class="container">
          
		<br>Warner Herrera Santamaría <br>Lilian Solís Ávila<br> Jonathan Pineda Aleman <br> UNA, Diseño e Implementación de Bases de Datos
		<br>&copy; 2022 - RESIDENCIAL 
        </div>
    </footer>
    <!--
    <script src="~/lib/jquery/dist/jquery.min.js"></script>
    -->
    <script src="src="../js/bootstrap.bundle.min.js""></script>
    <!--
    <script src="~/js/site.js" asp-append-version="true"></script> 
    @RenderSection("Scripts", required: false)
    -->
</body>
</html>
