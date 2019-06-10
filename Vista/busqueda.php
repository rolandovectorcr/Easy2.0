<html>
    <head>
        <title><?php
            session_start();
            if ($_SESSION) {
                echo $_SESSION['nombre'];
                ?> <?php
                echo $_SESSION['apellido'];
            } else {
                echo'Magnus';
            }
            ?></title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="Css/boot/bootstrap.min.css">
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>    
        <link rel="stylesheet" href="Css/Estilo.css">
        <link rel="stylesheet" href="Css/fontello.css">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-inverse  navbar-toggleable-md navbar-light bg-faded"  style="opacity: 0.9">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            if (@!$_SESSION['nombre']) {
                #si no ha iniciado nos redireccione a index.php
                echo '<img src="Img/footerimg3.jpg" width="45" height="45" class="d-inline-block align-top" style="border-radius: 50%;object-fit: cover;" alt="">';
            } else {
                echo'<img src="../modelo/';
                echo $_SESSION['foto'];
                echo'" width="45" height="45" class="d-inline-block align-top" style="border-radius: 50%;object-fit: cover;" alt="">';
            }
            ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto  ">
                    <?php
                    if (@!$_SESSION['nombre']) {
                        #si no ha iniciado nos redireccione a index.php
                        echo '<li class="nav-item dropdown">
                        <a id="navw"  class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            MAGNUS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item icon-emo-thumbsup" data-toggle="modal" data-target="#exampleModal" href="#">Inicia sesion</a>
                            <a class="dropdown-item icon-user" href="./newuser.php">Registrate</a>
                            <a class="dropdown-item icon-help" href="#">Como funciona</a>
                        </div>
                    </li>';
                    } else {
                        echo '<li class="nav-item dropdown">
                        <a id="navw"  class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ';
                        echo $_SESSION['nombre'];
                        echo'
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item icon-note" href="user.php#ventalink">Mis articulos</a>
                            <a class="dropdown-item icon-heart-1" href="user.php#likedlink">Favoritos</a>
                            <a class="dropdown-item icon-pencil" style="cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModali"  >Actualizar informacion</a>
                            <a class="dropdown-item icon-cloud-moon" href="../modelo/desconectar.php">Cerrar sesion</a>
                            <a class="dropdown-item icon-comment" href="#">Ayuda</a>
                            <a class="dropdown-item icon-handshake-o" href="#">Terminos de uso</a>
                        </div>
                    </li>';
                    }
                    ?>
                    <li class="nav-item">
                        <a class="nav-link icon-tv" style="cursor:pointer; color:white" href="#" data-toggle="modal" data-target="#exampleModali2"  >Productos</a>
                    </li>
                    <?php
                    if (@!$_SESSION['nombre']) {
                        #si no ha iniciado nos redireccione a index.php
                        echo '<li class="nav-item dropdown">
                                
                              </li>';
                    } else {
                        echo '<li class="nav-item dropdown">
                        <a id="navw" class="icon-note nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publicar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item icon-star-1"  href="newarticle.php" >Publicacion patrocinada</a>
                            <a class="dropdown-item icon-doc" href="newarticle2.php">Publicacion gratis</a>                        
                        </div>
                    </li>';
                    }
                    ?>
                    
                    <li class="nav-item">
                        <a class="nav-link icon-wpexplorer" id="navw" href="#">Blog</a>
                    </li>


                </ul>
                <form action="busqueda.php" method="GET" class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2 noborder rale" type="text" name="titulobusq" placeholder="Busca articulos aqui">
                    <button id="encontrar" class="btn btn-outline-success my-2 my-sm-0 icon-search noborder" type="submit">Encontrar</button>
                    <a class="nav-link icon-leaf" id="navw" href="user.php"></a>
                </form>
            </div>
        </nav>

        <style>
            .ec-stars-wrapper {
                /* Espacio entre los inline-block (los hijos, los `a`) 
                   http://ksesocss.blogspot.com/2012/03/display-inline-block-y-sus-empeno-en.html */
                font-size: 0;
                /* Podríamos quitarlo, 
                        pero de esta manera (siempre que no le demos padding), 
                        sólo aplicará la regla .ec-stars-wrapper:hover a cuando
                        también se esté haciendo hover a alguna estrella */
                display: inline-block;
            }
            .ec-stars-wrapper a {
                text-decoration: none;
                display: inline-block;
                /* Volver a dar tamaño al texto */
                font-size: 25px;
                cursor: default;
                color: #cccc00;
            }
            /*
            .ec-stars-wrapper:hover a {
                color: rgb(39, 130, 228);
            }
            
             * El selector de hijo, es necesario para aumentar la especifidad
             
            .ec-stars-wrapper > a:hover ~ a {
                color: #888;
            }
            */
        </style>

        <p id="top"></p>
        <section class="container-fluid">
            <div class="row">
                <div class=" contenedor col-9 align-items-center justify-content-around" id='busqueda'>
                    <?php
                    @$busqueda = $_GET['titulobusq'];
                    @$busquedazona = $_GET['zonabusq'];
                    @$busquedacategoria = $_GET['categoria'];
                    ?>

                    <?php
                    require '../modelo/conexion.php';
                    //lo que hay que hacer es crear las variables por cada campo que vamos a filtrar
                    //y crear una sola sentencia
                    //concatenamos el resto de las condiciones de la sentencia utilizando AND despues de WHERE
                    //dependiendo de un if exist la variable de cada filtro
                    $sentenciabusqueda = "SELECT * FROM `easy`.`article` WHERE `titulo` LIKE '%$busqueda%' ";
                    include '../controlador/keyword.php';
//                if ($busquedazona) {
//                    $sentenciabusqueda.=" AND `zona` LIKE '%$busquedazona%' ";
//                    include '../controladores/keywordplaces.php';
//                }
                    $sentenciabusqueda.="ORDER BY `id`;";
                    $result = mysqli_query($conexion, $sentenciabusqueda);
                    $rowcountr = mysqli_num_rows($result);
                    if ($rowcountr > 0) {
                        while ($resultado = mysqli_fetch_array($result)) {
                            if ($resultado['precio'] == 0) {
                                $resultado['precio'] = 1;
                            } else {
                                $resultado['precio'] = $resultado['precio'];
                            }
                            $calidad;
                            $iconcalidad;
                            if ($resultado['calidad'] == 1) {
                                $calidad = "Articulo nuevo";
                                $iconcalidad = "icon-gift";
                            } else {
                                $calidad = "Articulo usado";
                                $iconcalidad = "icon-tv";
                            }
                            if ($resultado['donativo'] == 0) {
                                echo "";
                            } else {



                                echo "
                                 
                                <div class='carta-container'>
                                    <div class='carta text-center'>
                                        <div class='lado frente'>
                                            <a href='#'><img src='../modelo/" . $resultado['fotoart'] . "'></a>
                                            <div id='infodeventa'>
                                                <p class='icon-doc'>" . $resultado['titulo'] . "</p>
                        <p id='precioa' class='icon-money borderb'> ₡ " . $resultado['precio'] . "</p>
                        <p id='ubicaciona' class='icon-location borderb'> " . $resultado['zona'] . "</p>";
//                        $envio = $resultado['envio'];
//                        if ($envio) {
//                            if ($envio == "correo") {
//                                $iconenv = "icon-mail-1";
//                                $envi = "Envio por correo";
//                                echo "<p id='env' name'env' class='$iconenv'>$envi</p>";
//                            }
//                            if ($envio == "reunion") {
//                                $iconenv = "icon-handshake-o";
//                                $envi = "Reunion en un punto cercano";
//                                echo "<p id='env' name='env' class='$iconenv'>$envi</p>";
//                            }
//                            if ($envio == "casa") {
//                                $iconenv = "icon-home-outline";
//                                $envi = "Se entrega en tu casa";
//                                echo "<p id='env' name='env' class='$iconenv'>$envi</p>";
//                            }
//                        } else {
//                            echo "<p id='env' name='env' class='icon-truck'>No hay metodo todavia</p>";
//                        }
                                echo"<p id='fecha' name'fecha' class='icon-calendar borderb'> " . $resultado['fecha'] . "</p>";
                                echo"</div>
        </div>";
                                $idproducto = $resultado['id'];
                                $idvende = $resultado['idvendedor'];
                                $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                                $resultadovende = mysqli_fetch_array($sqlvendedor);
                                echo "<div class='lado atras'>
                <div id='infovendedor'>        
                    <a id='notacartaatras'>4.2</a><img src='../modelo/" . $resultadovende['foto'] . "'>
                    <p id='nombrecartaatras'>" . $resultadovende['nombre'] . " " . $resultadovende['apellido'] . "</p>
                    
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>                 
                    <br><a href='articulo.php?articulo=" . $idproducto . "' class='btn btn-primary u icon-help'>Mas Informacion</a>"
                                . "<br>";
                                if (@!$_SESSION['nombre']) {
                                    #si no ha iniciado nos redireccione a index.php
                                    echo '';
                                } else {
                                    echo "<a class='btn fav btn-primary u icon-heart-1' href='../modelo/liked.php?id=$idproducto'>Seguir</a>";
                                }
                                echo"
                </div>
            </div>	
        </div>
    </div>";
                            }
                        }
                    } else {
                        echo 'Al chile no hay nada bae';
                    }
                    ?>
                </div>
                <div class="col-3">
                    <?php
                    @$busqueda = $_GET['titulobusq'];
                    @$busquedazona = $_GET['zonabusq'];
                    @$busquedacategoria = $_GET['categoria'];
                    ?>

                    <?php
                    require '../modelo/conexion.php';
                    //lo que hay que hacer es crear las variables por cada campo que vamos a filtrar
                    //y crear una sola sentencia
                    //concatenamos el resto de las condiciones de la sentencia utilizando AND despues de WHERE
                    //dependiendo de un if exist la variable de cada filtro
                    $sentenciabusqueda = "SELECT * FROM `easy`.`article` WHERE `titulo` LIKE '%$busqueda%' ";
                    include '../controlador/keyword.php';
//                if ($busquedazona) {
//                    $sentenciabusqueda.=" AND `zona` LIKE '%$busquedazona%' ";
//                    include '../controladores/keywordplaces.php';
//                }
                    $sentenciabusqueda.="ORDER BY `id`;";
                    $result = mysqli_query($conexion, $sentenciabusqueda);
                    $rowcountr = mysqli_num_rows($result);
                    if ($rowcountr > 0) {
                        while ($resultado = mysqli_fetch_array($result)) {
                            if ($resultado['precio'] == 0) {
                                $resultado['precio'] = 1;
                            } else {
                                $resultado['precio'] = $resultado['precio'];
                            }
                            $calidad;
                            $iconcalidad;
                            if ($resultado['calidad'] == 1) {
                                $calidad = "Articulo nuevo";
                                $iconcalidad = "icon-gift";
                            } else {
                                $calidad = "Articulo usado";
                                $iconcalidad = "icon-tv";
                            }
                            $idproducto = $resultado['id'];
                            if ($resultado['donativo'] == 0) {
                                echo '
                                <div class="col-12 text-center mt-3">
                                    <p class="pa icon-doc">' . $resultado['titulo'] . '</p>
                                    <p class="pa icon-location" style="color: #009999">' . $resultado['zona'] . '</p>
                                    <a class="pa icon-money" style="color: #006600"> ' . $resultado['precio'] . '</a><a class="icon-calendar" style="color: #cccc00"> ' . $resultado['fecha'] . '</a><a class="icon-help" data-toggle="modal" data-target="#exampleModall' . $idproducto . '" href="#" style="color: #dc6e00;text-decoration:none;">Ver mas informacion</a>
                                    <div class="row align-items-center mt-2 text-center justify-content-around">
                                        <div style="border-bottom: 1px solid #999999" class="col-10"></div>
                                    </div>
                                </div>';
                                $idvende = $resultado['idvendedor'];
                                $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                                $resultadovende = mysqli_fetch_array($sqlvendedor);
                                echo '
                                <div class="modal fade" id="exampleModall' . $idproducto . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title icon-user" id="exampleModalLabel">' . $resultadovende["nombre"] . '  ' . $resultadovende["apellido"] . '</h5>
                                                <h5 class="modal-title icon-mobile" id="exampleModalLabel">' . $resultadovende['telefono'] . '</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center">
                                                <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                                    <div class="form-group text-center">
                                                        <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                                    </div>

                                                    <button type="button" class="btn btn-secondary rale icon-cancel" data-dismiss="modal">Cerrar</button>';
                                if (@!$_SESSION['nombre']) {
                                    #si no ha iniciado nos redireccione a index.php
                                    echo '';
                                } else {
                                    echo"<a class='btn fav btn-primary u icon-heart-1' href='../modelo/liked.php?id=$idproducto'>Seguir</a>";
                                }
                                echo'</form>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            } else {
                                echo "";
                            }
                        }
                    } else {
                        echo 'Al chile no hay nada bae';
                    }
                    ?>
                </div>

            </div>
        </section>   
        <section class="container-fluid mt-5" id="foooter"> 
            <div class="row d-flex justify-content-around pt-5 pb-5">
                <div class="col-sm-12 col-md-12 col-lg-4 ">
                    <p style="font-size: 50px; color: #00cccc">Magnus es</p>
                    <p class="icon-leaf-1 qh2" id="copym">Encuentra bienes raices y alquileres</p>
                    <p class="icon-leaf-1 qh2" id="copym">Compra y ventad de articulos usados y nuevos</p>
                    <p class="icon-leaf-1 qh2" id="copym">Dejanos crear tu sitio web y mostrarte las posibilidades</p>
                    <p class="icon-leaf-1 qh2" id="copym">Te asesoramos para que tu imagen en la web se traduzca en ventas</p>

                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  align-items-center text-center">
                    <p class="footertitle"><a style="color: #00cccc">La comunicacion</a> entre tu y nosotros dirijra <a style="color: #00cccc">nuestros objetivos</a>, mantente cerca</p>                   
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4  align-items-center text-center">
                    <img class="card-img-top p" src="Img/footerimg3.jpg">
                    <p class="footertitle qh2">Solo necesitas estar listo,
                        <a class="qh2" style="color: #00cccc">la oportunidad</a> tiene que encontrarte <a class="qh2" style="color: #00cccc">trabajando</a>.</p>
                    <p class="qh2">EasyTrader Costa Rica © 2016</p>
                </div>

            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Bienvenido a Easy :D</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="../modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Correo electronico</label>
                                <input type="email" id="email" name="email" class="form-control rale" id="recipient-name">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="form-control-label">Contraseña</label>
                                <input type="password" id="pass" name="pass" class="form-control rale" id="message-text">
                            </div>
                            <button type="button" class="btn btn-secondary rale" data-dismiss="modal">Cerrar</button>
                            <input type="submit" class="btn btn-primary rale" value="Iniciar sesion">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModali" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Aqui puedes actualizar la informacion</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Nombre:</label>
                                <input type="text" name="nombre" class="form-control rale" id="recipient-name" value="<?php echo $_SESSION['nombre']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Apellido:</label>
                                <input type="text" name="apellido" class="form-control rale" id="recipient-name" value="<?php echo $_SESSION['apellido']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Numero:</label>
                                <input type="text" name="telefono" class="form-control rale" id="recipient-name" value="<?php echo $_SESSION['telefono']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Correo electronico:</label>
                                <input type="text" name="correo" class="form-control rale" id="recipient-name" value="<?php echo $_SESSION['email']; ?>" required>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Contraseña:</label>
                                <input type="text" name="clave" class="form-control rale" id="recipient-name" value="">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="form-control-label">Confirmar:</label>
                                <input type="text" name="clave2"  class="form-control rale" id="recipient-name" placeholder="&#128272;Repite la contraseña" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class=" rale btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" class=" rale btn btn-primary" value="Actualizar informacion">
                        </div>
                    </form>
                    <div class="modal-footer">
                        <button type="button" class=" rale btn btn-secondary" data-dismiss="modal">Mas informacion</button>
                        <button type="button" class=" rale btn btn-primary">Eliminar la cuenta</button>
                    </div>
                </div>
            </div>
        </div>