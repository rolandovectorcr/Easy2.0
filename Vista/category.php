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
        <?php include './navuser.php'; ?>
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
        <!--Start of Zopim Live Chat Script-->
        <script type="text/javascript">
            window.$zopim || (function (d, s) {
                var z = $zopim = function (c) {
                    z._.push(c)
                }, $ = z.s =
                        d.createElement(s), e = d.getElementsByTagName(s)[0];
                z.set = function (o) {
                    z.set.
                            _.push(o)
                };
                z._ = [];
                z.set._ = [];
                $.async = !0;
                $.setAttribute("charset", "utf-8");
                $.src = "//v2.zopim.com/?48NBGuHuMGKeYCWToIvaqP8L8xr6QfHp";
                z.t = +new Date;
                $.
                        type = "text/javascript";
                e.parentNode.insertBefore($, e)
            })(document, "script");
        </script>
        <!--End of Zopim Live Chat Script-->
        <p id="top"></p>
        <section id="articulo">
            <div class=" contenedor" id='busqueda'>
                <?php
                $category = $_GET['category'];
                ?>
                <?php
                require '../modelo/conexion.php';
                $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `categoria`='$category';");
                $no_reg = mysqli_num_rows($sqlarticulos);

                if ($no_reg == 0) {
                    echo 'No se han encontrado registros';
                }
                $reg_por_pag = 12;
                @$nro_pag = $_GET['num'];
                if (is_numeric($nro_pag)) {
                    $inicio = ($nro_pag - 1) * $reg_por_pag;
                } else {
                    $inicio = 0;
                    $nro_pag = 1;
                }
                $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `categoria`='$category' LIMIT $inicio,$reg_por_pag;");
                $can_pag = $no_reg / $reg_por_pag;
                if ($sqlarticulospa) {
                    while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
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
                        }$idproducto = $resultado['id'];
                        echo "<body>
    <div class='carta-containerssj'>
        <div class='cartassj'>
            <div class='ladossj frentessj'>
                <a><img src='../modelo/" . $resultado['fotoart'] . "'></a>
                    <div id='infodeventa'>
                        <p style='font-size:18px;margin:1px'>" . $resultado['titulo'] . "</p>
                        <p style='color:#009999;font-size:24px;margin:1px' class='icon-money'> ₡ " . $resultado['precio'] . "</p>
                        <p style='color:#adad02' class='icon-truck'><a style='font-size:28px'>" . $resultado['existencias'] . "</a> en almacen</p>
                        ";
//                        echo "<p id='env'>Metodo de envio</p>";
//                        $envio = $resultado['envio'];
//                        if ($envio) {
//                            if ($envio == "correo") {
//                                $iconenv = "icon-mail-1";
//                                $envi = "Envio por correo";
//                                echo "<p id='env' name='env' class='$iconenv'>$envi</p>";
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
                        echo"</div>
        </div>
        <div class = 'ladossj atrasssj'>
            <div id = 'infovendedor'>
            <a><img src='../modelo/" . $resultado['fotoart2'] . "'></a>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>   ";

                        if (@$_SESSION['nombre']) {
                            echo "<a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
                        } else {
                            echo "<a class='icon-emo-thumbsup m-2' data-toggle='modal' data-target='#exampleModal' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-user m-2 iconyes' href='newuser.php'></a>";
                        }
                        echo"
                   
        </div>
        </div>
        </div>
        </div>
        </body>";
                        $idvende = $resultado['idvendedor'];
                        $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                        $resultadovende = mysqli_fetch_array($sqlvendedor);
                        echo'
                    <div class="modal fade" id="exampleModal' . $idproducto . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title icon-user" id="exampleModalLabel">' . $resultadovende["nombre"] . '  ' . $resultadovende["apellido"] . '</h5>
                                    <h5 class="modal-title icon-mobile" id="exampleModalLabel">' . $resultadovende['telefono'] . '</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                        </div>

                                        <div class="m-4">';
                        if (@$_SESSION['nombre']) {
                            echo "<a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a><a  href='articulosell.php?articulo=" . $idproducto . "'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
                        } else {
                            echo '<a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>';
                        }
                        echo '</div>
                 </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                } else {
                    echo 'No hay articulos en el registro';
                }
                ?>
        </section>

        <?php
        $category = $_GET['category'];
        require '../modelo/conexion.php';
        $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `categoria`='$category';");
        $resultado = mysqli_fetch_array($sqlarticulos);
        if ($resultado['cate'] == "Desktop") {
            $linkimg = 'background-image: url("Img/54db441b5d51b_1420_.jpg");';
        } else if ($resultado['cate'] == "portatiles") {
            $linkimg = 'background-image: url("Img/blog-page.jpg");';
        } else if ($resultado['cate'] == "ArmatuPC") {
            $linkimg = 'background-image: url("Img/blog-page2.jpg");';
        } else if ($resultado['cate'] == "Tablets/celulares") {
            $linkimg = 'background-image: url("Img/blog-page5.jpg");';
        } else if ($resultado['cate'] == "impresoras") {
            $linkimg = 'background-image: url("Img/blog-blog-page6.jpg");';
        } else {
            $linkimg = 'background-image: url("Img/blog-page7.jpg");';
        }
        ?>
        <style>
            .catebanner{
                <?php echo $linkimg ?>
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment: fixed;
            }
        </style>
        <section class="container-fluid">
            <div class="row catebanner">
                <div class="col-6">
                    <div></div>
                </div>
                <div class="col-6 p-5 justify-content-around text-center" style="background:white">
                    <p class="cateuser cat" style="font-size:40px">Notebooks</p>           

                    <?php
                    require '../modelo/conexion.php';
                    $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='ArmatuPC';");
                    $no_reg = mysqli_num_rows($sqlarticulos);

                    if ($no_reg == 0) {
                        echo 'No se han encontrado registros';
                    }

                    $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='ArmatuPC' LIMIT 1;");

                    if ($sqlarticulospa) {
                        while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                            $idproducto = $resultado['id'];
                            echo '
 
                                <div class="col-12 ">
                                    <img src="../modelo/' . $resultado['fotoart'] . '" width="125" height="100" style="object-fit: cover">
                                </div>
                   
                               
                                        <p class="cateuser" >' . $resultado['titulo'] . '</p>
                              
                                    <p class="cateuser icon-money">' . $resultado['precio'] . '</p>
                                  
                              
                                    <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" id="iconyes"></a><a  data-toggle="modal" data-target="#exampleModal' . $idproducto . '" href="#"  id="iconyes" class="icon-eye m-2 iconyes"></a><a  id="iconyes" class="icon-user m-2 iconyes" href="vista/newuser.php"></a>              
                                
                      
                        
                    ';
                            ?>

                        </div>
                    </div>
                    <?php
                    $idvende = $resultado['idvendedor'];
                    $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                    $resultadovende = mysqli_fetch_array($sqlvendedor);
                    echo'
                    <div class="modal fade" id="exampleModal' . $idproducto . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title icon-user" id="exampleModalLabel">' . $resultadovende["nombre"] . '  ' . $resultadovende["apellido"] . '</h5>
                                    <h5 class="modal-title icon-mobile" id="exampleModalLabel">' . $resultadovende['telefono'] . '</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                        </div>

                                        <div class="m-4">
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
            </div>
                 </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                }
            } else {
                echo 'No hay articulos en el registro';
            }
            ?>
        </section>
        <section class="container-fluid mt-5">
            <div class="row  mt-5">
                <div class="col-12">
                    <p class="cateuser cat" style="font-size:40px"><?php echo $category ?></p>
                    <div class="row mt-5 align-items-center justify-content-around">
                        <?php
                        require '../modelo/conexion.php';
                        $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `categoria`='$category';");
                        $no_reg = mysqli_num_rows($sqlarticulos);

                        if ($no_reg == 0) {
                            echo 'No se han encontrado registros';
                        }

                        $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `categoria`='$category';");

                        if ($sqlarticulospa) {
                            while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                                $idproducto = $resultado['id'];
                                echo '
                    <div class="col-3">                
                    <div class="row ">
                        <div class="col-6 ">
                            <img src="../modelo/' . $resultado['fotoart'] . '" width="125" height="100" style="object-fit: cover">
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-12">
                                    <p class="cateuser" >' . $resultado['titulo'] . '</p>
                                </div>    
                                <div class="col-12">
                                    <p class="cateuser icon-money">' . $resultado['precio'] . '</p>
                                </div>   
                            </div>                           
                        </div>
                        <div class="col-12 align-items-center justify-content-around text-center"><br>';
                                if (@$_SESSION['nombre']) {
                                    echo "<a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
                                } else {
                                    echo "<a class='icon-emo-thumbsup m-2' data-toggle='modal' data-target='#exampleModal' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-user m-2 iconyes' href='newuser.php'></a>";
                                }
                                echo '    
                        </div>   
                    </div>
                    </div> ';
                                $idvende = $resultado['idvendedor'];
                                $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                                $resultadovende = mysqli_fetch_array($sqlvendedor);
                                echo'
                    <div class="modal fade" id="exampleModal' . $idproducto . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title icon-user" id="exampleModalLabel">' . $resultadovende["nombre"] . '  ' . $resultadovende["apellido"] . '</h5>
                                    <h5 class="modal-title icon-mobile" id="exampleModalLabel">' . $resultadovende['telefono'] . '</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                        </div>';
                                if (@$_SESSION['nombre']) {
                                    echo "<a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a><a href='articulosell.php?articulo=" . $idproducto . "'   id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
                                } else {
                                    echo "<a class='icon-emo-thumbsup m-2' data-toggle='modal' data-target='#exampleModal' id='iconyes'></a><a href='articulosell.php?articulo=" . $idproducto . "'   id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-user m-2 iconyes' href='newuser.php'></a>";
                                }
                                echo '    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                            }
                        } else {
                            echo '';
                        }
                        ?>                  

                    </div>
                </div>
            </div>
        </section>




        <section class="container-fluid front3 mt-5">
            <div class="row d-flex align-items-center p-2">
                <div class="col-sm-12 col-lg-4 col-md-6 text-center">
                    <p class="frontl">Concretar venta</p>
                    <div class="row align-items-center justify-content-around">
                        <div class="col-10" style="border-bottom: 1px solid white">
                        </div>
                    </div>
                    <p class="frontl2">los feedbacks positivos mejoran tu visibilidad en la pagina</p>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-6 text-center">
                    <p class="frontl">Haz crecer tu negocio</p>
                    <div class="row align-items-center justify-content-around">
                        <div class="col-10" style="border-bottom: 1px solid white">
                        </div>
                    </div>
                    <p class="frontl2">hemos creado una guia para explotar el potencial de Internet</p>
                </div>
                <div class="col-sm-12 col-lg-4 col-md-12 text-center">
                    <p class="frontl">Te impulsamos</p>
                    <div class="row align-items-center justify-content-around">
                        <div class="col-10" style="border-bottom: 1px solid white">
                        </div>
                    </div>
                    <p class="frontl2">contactanos por medio del chat o un correo, diseñaremos lo que necesitas</p>
                </div>
            </div>
        </section>

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

        <div class="modal fade" id="exampleModalidesktop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Desktop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center  mt-4 ">
                                <a class="catestilo" href="category.php?category=Desktop">Desktop</a>
                                <a class="catestilo" href="category.php?category=Servidor">Servidor</a>
                                <a class="catestilo" href="category.php?category=Gamer">Gamer</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Desktop" id="iconyes"></a>
                        </div>           
                    </form>          
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliportatiles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Notebooks y portatiles</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Laptop HP">Laptop HP</a>
                                <a class="catestilo" href="category.php?category=Laptop Dell">Laptop Dell</a>
                                <a class="catestilo" href="category.php?category=Laptop Toshiba">Laptop Toshiba</a>
                                <a class="catestilo" href="category.php?category=Laptop Apple">Laptop Apple</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Portatiles" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliarmapc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Arma tu PC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Monitores">Monitores</a>
                                <a class="catestilo" href="category.php?category=Procesadores">Procesadores</a>
                                <a class="catestilo" href="category.php?category=Caja/Case">Caja/Case</a>
                                <a class="catestilo" href="category.php?category=Memoria RAM">Memoria RAM</a>
                                <a class="catestilo" href="category.php?category=Targeta de video">Targeta de video</a>
                                <a class="catestilo" href="category.php?category=Discos Duros">Discos Duros</a>
                                <a class="catestilo" href="category.php?category=Targeta madre">Targeta madre</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=ArmatuPC" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalicelulares" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Notebooks y celulares</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Ipad">Ipad</a>
                                <a class="catestilo" href="category.php?category=Tablets">Tablets</a>
                                <a class="catestilo" href="category.php?category=Iphone">Iphone</a>
                                <a class="catestilo" href="category.php?category=Nokia">Nokia</a>
                                <a class="catestilo" href="category.php?category=Samnsung">Samnsung</a>
                                <a class="catestilo" href="category.php?category=Otros Celulares">Otros Celulares</a>
                                <a class="catestilo" href="category.php?category=Accesorio para celulares">Accesorio para celulares</a>

                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Tablets/celulares" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliimpresoras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Impresoras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Impresora EPSON">Impresora EPSON</a>
                                <a class="catestilo" href="category.php?category=Impresora HP">Impresora HP</a>
                                <a class="catestilo" href="category.php?category=Impresora Brother">Impresora Brother</a>
                                <a class="catestilo" href="category.php?category=Impresora Canon">Impresora Canon</a>
                                <a class="catestilo" href="category.php?category=Impresora Xerox">Impresora Xerox</a>
                                <a class="catestilo" href="category.php?category=Impresora Samsung">Impresora Samsung</a>
                                <a class="catestilo" href="category.php?category=Cartuchos originales">Cartuchos originales</a>
                                <a class="catestilo" href="category.php?category=Cartuchos genericos">Cartuchos genericos</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=impresoras" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliaccesorios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Accesorios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Parlantes">Parlantes</a>
                                <a class="catestilo" href="category.php?category=Teclado">Teclado</a>
                                <a class="catestilo" href="category.php?category=Mouse">Mouse</a>
                                <a class="catestilo" href="category.php?category=Headsets/Auriculares">Headsets/Auriculares</a>
                                <a class="catestilo" href="category.php?category=Baterias">Baterias</a>
                                <a class="catestilo" href="category.php?category=Fundas, maletines y estuches">Fundas, maletines y estuches</a>
                                <a class="catestilo" href="category.php?category=Cargadores">Cargadores</a>
                                <a class="catestilo" href="category.php?category=Memorias">Memorias</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Accesorios" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalidesktop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Desktop</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center  mt-4 ">
                                <a class="catestilo" href="category.php?category=Desktop">Desktop</a>
                                <a class="catestilo" href="category.php?category=Servidor">Servidor</a>
                                <a class="catestilo" href="category.php?category=Gamer">Gamer</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Desktop" id="iconyes"></a>
                        </div>           
                    </form>          
                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliportatiles" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Notebooks y portatiles</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Laptop HP">Laptop HP</a>
                                <a class="catestilo" href="category.php?category=Laptop Dell">Laptop Dell</a>
                                <a class="catestilo" href="category.php?category=Laptop Toshiba">Laptop Toshiba</a>
                                <a class="catestilo" href="category.php?category=Laptop Apple">Laptop Apple</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Portatiles" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliarmapc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Arma tu PC</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Monitores">Monitores</a>
                                <a class="catestilo" href="category.php?category=Procesadores">Procesadores</a>
                                <a class="catestilo" href="category.php?category=Caja/Case">Caja/Case</a>
                                <a class="catestilo" href="category.php?category=Memoria RAM">Memoria RAM</a>
                                <a class="catestilo" href="category.php?category=Targeta de video">Targeta de video</a>
                                <a class="catestilo" href="category.php?category=Discos Duros">Discos Duros</a>
                                <a class="catestilo" href="category.php?category=Targeta madre">Targeta madre</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=ArmatuPC" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModalicelulares" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Notebooks y celulares</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Ipad">Ipad</a>
                                <a class="catestilo" href="category.php?category=Tablets">Tablets</a>
                                <a class="catestilo" href="category.php?category=Iphone">Iphone</a>
                                <a class="catestilo" href="category.php?category=Nokia">Nokia</a>
                                <a class="catestilo" href="category.php?category=Samnsung">Samnsung</a>
                                <a class="catestilo" href="category.php?category=Otros Celulares">Otros Celulares</a>
                                <a class="catestilo" href="category.php?category=Accesorio para celulares">Accesorio para celulares</a>

                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Tablets/celulares" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliimpresoras" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Impresoras</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Impresora EPSON">Impresora EPSON</a>
                                <a class="catestilo" href="category.php?category=Impresora HP">Impresora HP</a>
                                <a class="catestilo" href="category.php?category=Impresora Brother">Impresora Brother</a>
                                <a class="catestilo" href="category.php?category=Impresora Canon">Impresora Canon</a>
                                <a class="catestilo" href="category.php?category=Impresora Xerox">Impresora Xerox</a>
                                <a class="catestilo" href="category.php?category=Impresora Samsung">Impresora Samsung</a>
                                <a class="catestilo" href="category.php?category=Cartuchos originales">Cartuchos originales</a>
                                <a class="catestilo" href="category.php?category=Cartuchos genericos">Cartuchos genericos</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=impresoras" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <div class="modal fade" id="exampleModaliaccesorios" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Accesorios</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="newuser" action="../modelo/editarususario.php" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                        <div class="modal-body">

                            <div class="form-group text-center mt-4 ">
                                <a class="catestilo" href="category.php?category=Parlantes">Parlantes</a>
                                <a class="catestilo" href="category.php?category=Teclado">Teclado</a>
                                <a class="catestilo" href="category.php?category=Mouse">Mouse</a>
                                <a class="catestilo" href="category.php?category=Headsets/Auriculares">Headsets/Auriculares</a>
                                <a class="catestilo" href="category.php?category=Baterias">Baterias</a>
                                <a class="catestilo" href="category.php?category=Fundas, maletines y estuches">Fundas, maletines y estuches</a>
                                <a class="catestilo" href="category.php?category=Cargadores">Cargadores</a>
                                <a class="catestilo" href="category.php?category=Memorias">Memorias</a>
                            </div>
                            <a class="icon-tv m-2" href="category.php?category=Accesorios" id="iconyes"></a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <?php
        include './login.php';
        