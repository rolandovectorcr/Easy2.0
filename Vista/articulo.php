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

        <?php
        require '../modelo/conexion.php';
        @$idartivu = $_GET['articulo'];
        $lik = 0;
        if ($_SESSION) {
            $iduser = $_SESSION['id'];
        } else {
            $iduser = 0;
        }
        $sqlarticulolik = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`");
        while ($resultadolik = mysqli_fetch_array($sqlarticulolik)) {

            if ($resultadolik['idarticulo'] == $idartivu && $resultadolik['likeid'] == $iduser) {
                $lik = 1;
            }
        }
        $sqlartipage = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `id` = '$idartivu';");
        $resultadoartipage = mysqli_fetch_array($sqlartipage);
        $calidad;
        $iconcalidad;
        if ($resultadoartipage['calidad'] == 1) {
            $calidad = "Articulo nuevo";
            $iconcalidad = "icon-gift";
        } else {
            $calidad = "Articulo usado";
            $iconcalidad = "icon-tv";
        }
        $idartipagevende = $resultadoartipage['idvendedor'];
        $sqlartipagevende = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idartipagevende';");
        $resultadoartipagevende = mysqli_fetch_array($sqlartipagevende);
        ?>
        <style>
            /*Some CSS*/
            * {margin: 0; padding: 0;}
            .magnify {width: 480px; margin: 50px auto; position: relative;}

            /*Lets create the magnifying glass*/
            .large {
                width: 400px; height: 400px;
                position: absolute;
                border-radius: 100%;

                /*Multiple box shadows to achieve the glass effect*/
                box-shadow: 0 0 0 7px rgba(255, 255, 255, 0.85), 
                    0 0 7px 7px rgba(0, 0, 0, 0.25), 
                    inset 0 0 40px 2px rgba(0, 0, 0, 0.25);

                /*Lets load up the large image first*/
                background: url(../modelo/<?php echo $resultadoartipage['fotoart'] ?>) no-repeat;

                /*hide the glass by default*/
                display: none;
            }

            /*To solve overlap bug at the edges during magnification*/
            .small { display: block; }
        </style>
        <style type="text/css">
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
                font-size: 32px;
                font-size: 2rem;
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
        <?php include('./navuser.php') ?>
        <section class="container-fluid mt-2 mb-5">
            <div class="row  align-items-center justify-content-around">
                <div class="col-sm-12 col-lg-8 col-md-12">
                    <div class="container-fluid">
                        <div class="row">
                            <div id="showimg1" style="background-image: url(../modelo/<?php echo $resultadoartipage['fotoart'] ?>);background-size: auto 100%;" class="showimg col-sm-3 col-lg-3 col-md-3"></div>
                            <div id="showimg2" style="background-image: url(../modelo/<?php echo $resultadoartipage['fotoart2'] ?>);background-size: auto 100%;" class="showimg col-sm-3 col-lg-3 col-md-3"></div>
                            <div id="showimg3" style="background-image: url(../modelo/<?php echo $resultadoartipage['fotoart3'] ?>);background-size: auto 100%;" class="showimg col-sm-3 col-lg-3 col-md-3"></div>
                            <div id="showimg4" style="background-image: url(../modelo/<?php echo $resultadoartipage['fotoart4'] ?>);background-size: auto 100%;" class="showimg col-sm-3 col-lg-3 col-md-3"></div>                      
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid mt-5 mb-5">
            <div class="row d-flex align-items-center justify-content-around">
                <div class = 'col-sm-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-around'>
                    <div class = 'lado atras'>
                        <div id = 'infovendedor' class=' text-center align-items-center'>
                            <a id='notacartaatras'>4.2</a><img style="border-radius: 50%; object-fit: cover; height: 150px;" src="../modelo/<?php echo $resultadoartipagevende['foto'] ?>" width="150px">
                            <p id='nombrecartaatras'><?php echo $resultadoartipagevende['nombre']; ?> <?php echo $resultadoartipagevende['apellido']; ?></p>
                            <a style="font-size: 25px; color: #669900" class='icon-chart-pie-outline'>Ventas: 23</a>    
                            <a style='font-size: 25px;color: #cccc00'><?php echo $resultadoartipagevende['email']; ?></a>
                            <a style='font-size: 25px;color: #990000'><?php echo $resultadoartipagevende['telefono']; ?></a>
                            <br><div class='ec-stars-wrapper'>
                                <a href='#' data-value'1'>&#9733;</a>
                                <a href='#' data-value'2'>&#9733;</a>
                                <a href='#' data-value'3'>&#9733;</a>
                                <a href='#' data-value'4'>&#9733;</a>
                                <a href='#' data-value'5'>&#9733;</a>
                            </div>
                            <noscript>Necesitas tener habilitado javascript para poder votar</noscript>     
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 text-center">
                    <p style="font-size: 30px; color: #009999"><?php echo $resultadoartipage['titulo'] ?></p>
                    <p style="font-size: 25px; color: #006600"> ₡ <?php echo $resultadoartipage['precio'] ?></p>
                    <p style=''><?php echo $resultadoartipage['descripcion'] ?></p>
                    <a style="font-size: 25px; color: #669900"><?php echo $resultadoartipage['zona'] ?></a>
                    <?php
                    echo "<a  style='font-size: 25px;color: #cccc00'  name='calidad'>" . $calidad . " " . $resultadoartipage['estado'] . "/10</a>";

                    $envio = $resultadoartipage['envio'];
                    if ($envio) {
                        if ($envio == "correo") {
                            $iconenv = "";
                            $envi = "Envio por correo";
                            echo "<a style='font-size: 25px;color: #990000' name='env' class='$iconenv'>$envi</a>";
                        }
                        if ($envio == "reunion") {
                            $iconenv = "";
                            $envi = "Reunion en un punto cercano";
                            echo "<a style='font-size: 25px;color: #990000' name='env' class='$iconenv'>$envi</a>";
                        }
                        if ($envio == "casa") {
                            $iconenv = "";
                            $envi = "Se entrega en tu casa";
                            echo "<a style='font-size: 25px;color: #990000' name'env' class='$iconenv'>$envi</a>";
                        }
                    } else {
                        echo "<a id='envi' name='envi' style='font-size: 25px;color: #990000'>No hay metodo todavia</a>";
                    }
                    ?>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-around ">
                    <form action="../modelo/addmensaje.php" method="post"  enctype="multipart/form-data">
                        <div class="row  align-items-center justify-content-around text-center">
                            <p style="font-size: 30px; color: #cccc00;">Dejale un mensaje a <?php echo $resultadoartipagevende['nombre']; ?> y hazle saber tu interes en sl articulo</p>
                            <?php
                            if (@!$_SESSION['nombre']) {
                                #si no ha iniciado nos redireccione a index.php
                                echo '<input style="border: none; border-bottom: 1px solid #999999;" class="col-10 rale p-2 m-2" name="nombre" type="text" placeholder="Escribe tu numbre">
                            <input style="border: none; border-bottom: 1px solid #999999;" class="col-5 rale p-2 m-2" name="numero" type="text" placeholder="tu numero de telefono">
                            <input style="border: none; border-bottom: 1px solid #999999;" class="col-5 rale p-2 m-2" name="correo" type="text" placeholder="tu correo electronico">
                            ';
                            } else {
                                echo'<input type="text" name="nombre" value="' . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . '" style="display:none">
                            <input type="text" name="numero" value="' . $_SESSION['telefono'] . '" style="display:none">
                            <input type="text" name="correo" value="' . $_SESSION['email'] . '" style="display:none">
                            ';
                            }
                            ?>

                            <?php
                            if (@!$_SESSION['nombre']) {
                                $fotocomentante = "../vista/img/us.png";
                            } else {
                                $fotocomentante = $_SESSION['foto'];
                            }
                            ?>
                            <textarea style="border: none; border-bottom: 1px solid #999999; height: 150px" class="col-10 rale p-2 m-2 rale"  name="mensaj" type="text" placeholder="y tu mensaje..."></textarea>
                            <input type="text" name="idarticulo" value="<?php echo $idartivu ?>" style="display:none">
                            <input type="text" name="idanunciante" value="<?php echo $idartipagevende ?>" style="display:none">
                            <input type="text" name="idcomentante" value="<?php echo $iduser; ?>" style="display:none">
                            <input type="text" name="fotocomentante" value="../modelo/<?php echo $fotocomentante ?>" style="display:none">
                            <?php
                            if (@!$_SESSION['nombre']) {
                                #si no ha iniciado nos redireccione a index.php
                                echo '';
                            } else {
                                echo "<a class='icon-heart m-2' id='iconyes' href='../modelo/liked.php?id=$idartivu'></a>  <a class='icon-facebook-squared m-2' id='iconyes' href='../modelo/liked.php?id=$idartivu'></a>   <a class='icon-twitter m-2' id='iconyes' href='../modelo/liked.php?id=$idartivu'></a>";
                            }
                            ?>
                            <input type="submit" class="btn btn-secondary u rale" value="Envia tu mensaje">
                        </div>

                    </form>
                </div>
                <div class=" mt-5 col-sm-11 col-md-8 col-lg-10 d-flex align-items-center justify-content-around text-center">
                    <p style="font-size: 35px; color: #009999;">En los comentarios puedes encontrar mas informacion del articulo,
                        contribuye dejando tu pregunta</p>
                </div>
                <div class=" mt-5 col-sm-11 col-md-8 col-lg-10 d-flex align-items-center justify-content-around text-center">
                    <div class="col-12">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <form  action="../modelo/addcoment.php" method="post"  enctype="multipart/form-data">
                                    <div class="row  align-items-center justify-content-around text-center">
                                        <p style="font-size: 30px; color: #cccc00;">Comentario nuevo</p>
                                        <input style="border: none; border-bottom: 1px solid #999999;" class="col-10 rale p-2 m-2" name="comentario" type="text" placeholder="Comentario nuevo">
                                        <?php
                                        if (@!$_SESSION['nombre']) {
                                            #si no ha iniciado nos redireccione a index.php
                                            echo '<input style="border: none; border-bottom: 1px solid #999999;" class="col-5 rale p-2 m-2" name="nombre" type="text" placeholder="Escribe tu nombre">';
                                        } else {
                                            if ($idartipagevende == $iduser) {
                                                echo '<input type="text" name="nombre" value="' . $resultadoartipagevende['nombre'] . " " . $resultadoartipagevende['apellido'] . '" style="display:none">';
                                            } else {
                                                echo '<input type="text" name="nombre" value="' . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . '" style="display:none">';
                                            }
                                        }
                                        ?>
                                        <?php
                                        if (@!$_SESSION['nombre']) {
                                            $fotocomentante = "../vista/img/us.png";
                                        } else {
                                            $fotocomentante = $_SESSION['foto'];
                                        }
                                        ?>
                                        <input type="text" name="idarticulo" value="<?php echo $idartivu ?>" style="display:none">
                                        <input type="text" name="idanunciante" value="<?php echo $idartipagevende ?>" style="display:none">
                                        <input type="text" name="idcomentante" value="<?php echo $iduser; ?>" style="display:none">
                                        <input type="text" name="fotocomentante" value="../modelo/<?php echo $fotocomentante ?>" style="display:none">
                                        <input type="submit" value="Deja tu mensaje" class="btn btn-secondary u col-5 rale">
                                    </div>
                                </form>
                            </div>
                            <div class="col-6">
                                <div class="row">
                                    <?php
                                    require '../Modelo/conexion.php';
                                    $sentenciabusqueda = "SELECT * FROM `easy`.`comentarios` WHERE `idarticulo` LIKE '%$idartivu%' ";
                                    $result = mysqli_query($conexion, $sentenciabusqueda);
                                    $rowcountr = mysqli_num_rows($result);
                                    if ($rowcountr > 0) {
                                        while ($resultado = mysqli_fetch_array($result)) {
                                            echo'
                                                <div class="col-2">
                                                    <img  src="' . $resultado["imgcomentante"] . '" class="imgcomen">
                                                </div>
                                                <div class="col-10 text-left comen">
                                                    <a style="color: ' . $resultado["color"] . '">' . $resultado["nombre"] . '</a><a style="color:silver"> ' . $resultado["fecha"] . '</a>
                                                    <p>' . $resultado["comentario"] . '</p>
                                                </div>';
                                        }
                                    } else {
                                        echo 'No hay articulos en el registro';
                                    }
                                    ?>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section id="articulo">
            <div class=" contenedor" id='busqueda'>
                <?php
                $category = $resultadoartipage['categoria'];
                ?>
                <?php
                require '../modelo/conexion.php';
                $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='$category';");
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
                $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='$category' LIMIT $inicio,$reg_por_pag;");
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
                        }
                        if ($resultado['donativo'] == 0) {
                            echo "";
                        } else {

                            echo "<body >
                                <div class='carta-container'>
                                    <div class='carta'>
                                        <div class='lado frente'>
                                            <a href='#'><img src='../modelo/" . $resultado['fotoart'] . "'></a>
                                            <div id='infodeventa'>
                                                <p class='icon-doc'>" . $resultado['titulo'] . "</p>
                        <p id='precioa' class='icon-money'> ₡ " . $resultado['precio'] . "</p>
                        <p id='ubicaciona' class='icon-location'> " . $resultado['zona'] . "</p>";
//                        echo "<p id='env'>Metodo de envio</p>";
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
                            echo"<p id='fecha' name'fecha' class='icon-calendar'> " . $resultado['fecha'] . "</p>";
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
                    <br><br>";
                            if (@!$_SESSION['nombre']) {
                                #si no ha iniciado nos redireccione a index.php
                                echo '';
                            } else {
                                echo "<a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a>";
                            }
                            echo"<a  data-toggle='modal' data-target='#exampleModale" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a>";
                            if (@!$_SESSION['nombre']) {
                                #si no ha iniciado nos redireccione a index.php
                                echo '';
                            } else {
                                echo "";
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
                    <div class="modal fade" id="exampleModale' . $idproducto . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title icon-user" id="exampleModalLabel">' . $resultadovende["nombre"] . '  ' . $resultadovende["apellido"] . '</h5>
                                    <h5 class="modal-title icon-mobile" id="exampleModalLabel">' . $resultadovende['telefono'] . '</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body align-items-center">
                                    <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                        </div>
                                        <div class="m-4">
                                        <a class="icon-heart m-2"  href="../modelo/liked.php?id=' . $idproducto . '" id="iconyes"></a><a   href="articulo.php?articulo=' . $idproducto . '" id="iconyes" class="icon-eye m-2 iconyes"></a>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
        }
    } else {
        echo 'No hay articulos en el registro';
    }
    ?>
</section>
        <section class="container-fluid">
            <div class="row text-center">
                <?php
                $category = $resultadoartipage['categoria'];
                ?>
                <?php
                require '../modelo/conexion.php';
                $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='$category';");
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
                $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='$category' LIMIT $inicio,$reg_por_pag;");
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
                        }
                        $idproducto2 = $resultado['id'];
                        if ($resultado['donativo'] == 0) {
                            echo '<div class="col-4 text-center mt-3">
                                    <p class="pa icon-doc">' . $resultado['titulo'] . '</p>
                                    <p class="pa icon-location" style="color: #009999">' . $resultado['zona'] . '</p>
                                    <a class="pa icon-money" style="color: #006600"> ' . $resultado['precio'] . '</a><a class="icon-calendar" style="color: #cccc00"> ' . $resultado['fecha'] . '</a><a class="icon-eye" data-toggle="modal" data-target="#exampleModall' . $idproducto . '" href="#" style="color: #dc6e00;text-decoration:none;">Ver mas informacion</a>
                                    <div class="row align-items-center mt-2 text-center justify-content-around">
                                        <div style="border-bottom: 1px solid #999999" class="col-10"></div>
                                    </div>
                                </div>';

                            $idvende = $resultado['idvendedor'];
                            $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                            $resultadovende = mysqli_fetch_array($sqlvendedor);
                            echo'
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
                                <div class="modal-body">
                                    <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                                        <div class="form-group">
                                            <label for="recipient-name" class="form-control-label">' . $resultado['descripcion'] . '</label>

                                        </div>';
                            if (@!$_SESSION['nombre']) {
                                #si no ha iniciado nos redireccione a index.php
                                echo ' <input type="submit" class="btn btn-primary rale icon-user" value="Iniciar sesion">';
                            } else {
                                echo"<a class='icon-heart m-2' id='iconyes' href='../modelo/liked.php?id=$idproducto2'></a>";
                            }
                            echo'
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                        }
                    }
                } else {
                    echo 'No hay articulos en el registro';
                }
                ?>
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
    </body>
</html>