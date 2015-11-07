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
                    <!-- Aqui termina la opcion administrar-->
                    <li>
                        <a class="page-scroll" href="#" data-toggle="modal" data-target="#myModal"><span class="btn-estructurado">Iniciar Session</span></a>
                    </li>
                    <!-- Para cuando el usuario ya este logeado quitar la parte de arriba y dejar esta-->
                    <!-- 
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
                    -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Modal Inicio de Sesion -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title modal-font" id="myModalLabel">Inicio de Session</h4>
                </div>
                <!-- Aqui esta el form de inicio de session -->
                <form>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputEmail1">Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Correo">
                        </div>
                        <div class="form-group">
                            <label class="modal-font" for="exampleInputPassword1">Contraseña</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="button" class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

     <!-- Cuadro de Opciones de busqueda( Ocupa 3 celdas de ancho) -->
    <div class="container">
        <div data-spy="affix" class="quick-contact">
            <div class="col-md-12 cuadro">
                <form>
                    <h3>Buscar opciones:</h3>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Destino:</label>
                        <input class="form-control" placeholder="Destino">
                    </div>
                    <div class="form-group">
                        <label>Llegada:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Salida:</label>
                        <input type="date" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Numero de peronas:</label>
                        <select class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Buscar</button>
                </form>
            </div>
        </div>
    </div> 

    <!--  Este es el header -->
    <header class="intro">
        
    </header>

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
