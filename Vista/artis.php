
<div class="container-fluid">
    <div class="row align-items-center mt-5 mb-5 text-center justify-content-around">
        <div class="col-12">
            <p style="color: #009999; font-size: 50px">This our business section created for you</p>
            <p style="color: #cccc00; font-size: 25px">Business strategy. People friendly</p>
        </div>
    </div>
    <div class="row mb-5 text-center">
        <div class="col-6 p-4 align-content-around align-content-around">
            <p style="color: #009999; font-size: 35px">This our business section created for you</p>
            <div class="row">
                <div class="col-6">
                    <p style="color: #cccc00; font-size: 20px">This our business section created for you</p>
                    <p style="color: #999999; font-size: 20px">This our business section created for you</p>
                </div>
                <div class="col-6">
                    <p style="color: #cccc00; font-size: 20px">This our business section created for you</p>
                    <p style="color: #999999; font-size: 20px">This our business section created for you</p>
                </div>
            </div>
        </div>
        <div class="col-6 articulosestrella2 text-left">

        </div>
    </div>
</div>
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
<section id="articulo">
    <?php
    require 'modelo/conexion.php';



    // Categoria de carros!
    $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='casa';");
    $no_reg = mysqli_num_rows($sqlarticulos);
    $rand = rand(1, $no_reg);
    if ($no_reg == 0) {
        echo 'No se han encontrado registros';
    }
    $reg_por_pag = 7;
    @$nro_pag = $_GET['num'];
    if (is_numeric($nro_pag)) {
        $inicio = ($nro_pag - 1) * $reg_por_pag;
    } else {
        $nro_pag = 1;
        $inicio = 0;
    }
    $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='casa' LIMIT $inicio,$reg_por_pag;");
    $can_pag = ceil($no_reg / $reg_por_pag);

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


                echo "<body>
    <div class='carta-container'>
        <div class='carta'>
            <div class='lado frente'>
                <a><img src='modelo/" . $resultado['fotoart'] . "'></a>
                    <div id='infodeventa'>
                        <p class='icon-doc'>" . $resultado['titulo'] . "</p>
                        <p class='icon-money ' id='precioa'> ₡ " . $resultado['precio'] . "</p>
                        <p class='icon-location ' id='ubicaciona'> " . $resultado['zona'] . "</p>";
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

                echo"<p id='fecha' name'fecha' class='icon-calendar '> " . $resultado['fecha'] . "</p>";
                echo"</div>
        </div>";
                $idproducto = $resultado['id'];
                $idvende = $resultado['idvendedor'];
                $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';
        ");
                $resultadovende = mysqli_fetch_array($sqlvendedor);
                echo "<div class = 'lado atras'>
            <div id = 'infovendedor'>
            <a id='notacartaatras'>4.2</a><img src='modelo/" . $resultadovende['foto'] . "'>
                    <p id='nombrecartaatras'>" . $resultadovende['nombre'] . " " . $resultadovende['apellido'] . "</p>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>  <br><br>              
                     <a class='icon-emo-thumbsup m-2' data-toggle='modal' data-target='#exampleModal' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a  id='iconyes' class='icon-user m-2 iconyes' href='vista/newuser.php'></a>";
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

                                        <div class="m-4">
                                            <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulo.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
        require 'Modelo/conexion.php';
        $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`article`;");
        $no_reg = mysqli_num_rows($sqlarticulos);
        $rand = rand(4, $no_reg);
//        if ($no_reg == 0) {
//            echo 'No se han encontrado registros';
//        }
//        $reg_por_pag = 12;
//        @$nro_pag = $_GET['num'];
//        if (is_numeric($nro_pag)) {
//            $inicio = ($nro_pag - 1) * $reg_por_pag;
//        } else {
//            $nro_pag = 1;
//            $inicio = 0;
//        }
        $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `id`");
//        $can_pag = ceil($no_reg / $reg_por_pag);

        if ($sqlarticulospa) {
            while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                $idproducto = $resultado['id'];
                if ($resultado['donativo'] == 1) {
                    echo "";
                } else {


                    echo '
                    <div class="col-4 text-center mt-3">
                        <p class="pa icon-doc">' . $resultado['titulo'] . '</p>
                        <p class="pa icon-location" style="color: #009999">' . $resultado['zona'] . '</p>
                        <a class="pa icon-money" style="color: #006600"> ' . $resultado['precio'] . '   </a><a style="color: #cccc00" class="icon-calendar">' . $resultado['fecha'] . '    </a><a  data-toggle="modal" data-target="#exampleModal' . $idproducto . '" href="#" style="color: #dc6e00;text-decoration:none" class="icon-eye">Ver mas informacion</a>
                        <div class="row align-items-center mt-2 text-center justify-content-around">
                            <div style="border-bottom: 1px solid #999999" class="col-10"></div>
                        </div>
                    </div>';
                    
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
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
            </div>
                 </form>
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
