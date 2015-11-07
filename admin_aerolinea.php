<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TravelProgra</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilo.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
    
    <!-- Nav -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <!--Logo-->
            <div class="navbar-header">
                
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <span class=" glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
                </button>
                <a class="navbar-brand page-scroll" href="index.php">
                    <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><span class="light">Progra</span>TRAVEL
                </a>
            </div>

           <!--Menu-->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="index.php"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="explorar.php">Explorar</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="destinos.php">Destinos</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="hoteles.php">Hoteles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="aerolineas.php">Aerolineas</a>
                    </li>
                     <!-- Mostrar esta parte solo si es Administrador-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Administrar <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><a href="admin_aerolinea.php">Aerolinea</a></li>
                            <li><a href="admin_categoriavuelo.php">Categoria Vuelo</a></li>
                            <li><a href="admin_destino.php">Destino</a></li>
                            <li><a href="admin_destinohotel.php">Destino Hotel</a></li>
                            <li><a href="admin_galeria.php">Galeria</a></li>
                            <li><a href="admin_hotel.php">Hotel</a></li>
                            <li><a href="admin_pais.php">Pais</a></li>
                            <li><a href="admin_tarjetausuario.php">Tarjeta Usuario</a></li>
                            <li><a href="admin_tipotarjeta.php">Tipo Tarjeta</a></li>
                            <li><a href="admin_usuario.php">Usuario</a></li>
                            <li><a href="admin_viaje.php">Viaje</a></li>
                            <li><a href="admin_vuelo.php">Vuelo</a></li>
                        </ul>
                    </li>
                    <!-- Para cuando el usuario ya este logeado quitar la parte de arriba y dejar esta-->
                    <li>
                        <a class="page-scroll" href="#"data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Jonathan Romero <span class="caret"></span></a>
                        <ul class="dropdown-menu drop" aria-labelledby="dropdownMenu1">
                            <li><a href="#">Perfil</a></li>
                            <li><a href="#">Mis Tarjetas</a></li>
                            <li><a href="#">Reservaciones</a></li>
                            <li><a href="#">Mis Viajes</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Cerrar Session</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  Este es el header -->
    <header class="intro-aerolinea intro-admin">
        <div class="container">
            <div class="rows">
                <div class="col-md-3 intro-buscar">
                    <form>
                        <h3>Buscar:</h3>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre:</label>
                            <input class="form-control" placeholder="Buscar">
                        </div>
                        <div class="form-group">
                            <label>Buscar por:</label>
                            <select class="form-control">
                                <option>ID Aerolinea</option>
                                <option>Nombre</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ordenar por:</label>
                            <select class="form-control">
                                <option>ID Aerolinea</option>
                                <option>Nombre [A - Z]</option>
                                <option>Nombre [Z - A]</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                    </form>
                </div>
                <div class="col-md-9 intro-letras">
                    <h1>Mantenimiento Aerolinea</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="admin-mantenimientos">
        <div class="container">
            <div class="rows text-center">
                <h2 class="titulo-admin"><u>Administracion</u></h2>
            </div>
            <div class="rows">
                <div class="col-md-12 agregar">
                    <h4><u>Agregar</u></h4>
                    <form action="">
                        <div class="form-group">
                            <span>Nombre</span>
                            <input type="input" class="form-control" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <span>Logo:</span>
                            <input type="file">
                        </div>
                        <button type="button" class="btn btn-info">Agregar</button>
                    </form>
                </div>
            </div>
            <div class="rows listar">
                <div class="col-md-12">
                    <h4>Litado:</h4>
                    <div id="mantenimiento-tabla">
                        <form action="procesos/adminU.php" method="post" enctype="multipart/form-data">
                            <div class="table-responsive">
                                <table class="table table-striped success table-hover table-condensed">
                                    <tr>
                                        <th><strong>ID Aerolinea</strong></th>
                                        <th><strong>Nombre</strong></th>
                                        <th><strong>Logo</strong></th>
                                        <th><strong>Cambiar Logo</strong></th>
                                        <th><strong>Modificar</strong></th>
                                        <th><strong>Activo</strong></th>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Avianca airlines"></td>
                                        <td><img src="img/avianca.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Delta airlines"></td>
                                        <td><img src="img/delta.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Copa airlines"></td>
                                        <td><img src="img/copa.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><input class="form-control" placeholder="Nombre" value="American airlines"></td>
                                        <td><img src="img/american.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><input class="form-control" placeholder="Nombre" value="Veca airlines"></td>
                                        <td><img src="img/veca.jpg" alt='AVIANCA' class='imagen'></td>
                                        <td><input type="file" name="foto"></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Modificar</button></td>
                                        <td><button name="" type='submit' class='btn btn-primary'>Activo</button></td>
                                    </tr>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="rows">
                <div class="col-md-4">
                    <h4><u>CONTACTENOS</u></h4>
                    <p><span class="glyphicon glyphicon-phone"></span>  Telefono: (+503) 2233-5564</p>
                    <p><span class="glyphicon glyphicon-envelope"></span>  Correo: info@progratravel.com</p>
                    <p><span class="glyphicon glyphicon-map-marker"></span>  Direccion: Av. Olimpica #132, San Salvador, El Salvador</p>
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-4 text-right">
                    <h4><u>Redes Sociales</u></h4>
                    <a href="#"><img class="socialintro" src="img/facebook.png"></a>
                    <a href="#"><img class="socialintro" src="img/twitter.png"></a>
                    <a href="#"><img class="socialintro" src="img/youtube.png"></a>
                </div>
            </div>
        </div>
        <div class="rows">
           <div class="container text-center">
            <p>Copyright &copy; Programacion IV - Kohana Framework</p>
        </div> 
        </div>
        
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/viaje.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
