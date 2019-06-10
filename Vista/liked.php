<section class="container-fluid" style="background-image: url('Img/banner3.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;" id="lik">


    <section style="background-color: white;" id="articulo" class="container">
        <?php
        require '../Modelo/conexion.php';
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
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
            $iduser = $_SESSION['id'];
            $sqlarticulospaw = mysqli_query($conexion, "SELECT * FROM `easy`.`likedsell` WHERE `likeid`='$iduser';");
            $rowcountf = mysqli_num_rows($sqlarticulospaw);
            if ($rowcountf > 0) {
                echo'';
                while ($resultado1 = mysqli_fetch_array($sqlarticulospaw)) {
                    $articuloliked = $resultado1["idarticulo"];
                    $sqlarticulospa1 = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `id`='$articuloliked';");
//      $can_pag = ceil($no_reg / $reg_por_pag);        

                    while ($resultado = mysqli_fetch_array($sqlarticulospa1)) {
                        $idproducto = $resultado['id'];

                        $idai = $resultado['id'];
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
                        
                        echo "<body>
    <div class='carta-containerssj'>
        <div class='cartassj'>
            <div class='ladossj frentessj'>
                <a><img src='../modelo/" . $resultado['fotoart'] . "'></a>
                    <div id='infodeventa'>
                        <p style='font-size:18px;margin:1px'>" . $resultado['titulo'] . "</p>
                        <p style='color:#009999;font-size:24px;margin:1px' class='icon-money'> ₡ " . $resultado['precio'] . "</p>
                        <p style='color:#adad02' class='icon-truck'>7 en almacen</p>
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
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
                    <a href='../modelo/eliminarartifavsell.php?id=" . $articuloliked . "' class='icon-cancel m-2' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a href='../modelo/cart.php?cart=". $idproducto ."' id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
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

                                        '; echo "<a href='../modelo/eliminarartifavsell.php?id=" . $articuloliked . "' class='icon-cancel m-2' id='iconyes'></a>"; echo '<a href="articulosell.php?articulo=' . $idproducto . '"   id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
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
    </div>
</section>
    <section class="container-fluid mt-5 mb-5" style="background:white;">
        <div class="row">
            <?php
            require '../Modelo/conexion.php';
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
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
            $iduser = $_SESSION['id'];
            $sqlarticulospaw = mysqli_query($conexion, "SELECT * FROM `easy`.`liked` WHERE `likeid`='$iduser';");
            $rowcountf = mysqli_num_rows($sqlarticulospaw);
            if ($rowcountf > 0) {
                echo'';
                while ($resultado1 = mysqli_fetch_array($sqlarticulospaw)) {
                    $articuloliked = $resultado1["idarticulo"];
                    $sqlarticulospa1 = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `id`='$articuloliked';");
//      $can_pag = ceil($no_reg / $reg_por_pag);        

                    while ($resultado = mysqli_fetch_array($sqlarticulospa1)) {
                        $idproducto = $resultado['id'];

                        $idai = $resultado['id'];
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


                            echo"
                        
                <div class = 'col-sm-12 col-md-6 col-lg-4 mt-5 mb-5'>
                    <div class = 'row'>
                        <div class = 'col-sm-12 col-md-6 col-lg-6 '>
                            <div class='lado frente  text-center'>
                                <a><img class='imglikedarti' src='../modelo/" . $resultado['fotoart'] . "'></a>
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

                            echo"<p id='fecha' class='icon-calendar ' name'fecha'> " . $resultado['fecha'] . "</p>";
                            echo"
                        </div>
                            </div>
                        </div>";

                            $idvende = $resultado['idvendedor'];
                            $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                            $resultadovende = mysqli_fetch_array($sqlvendedor);
                            echo "
                        <div class = 'col-sm-12 col-md-6 col-lg-6 '>
                              <div class = 'lado atras'>
                                    <div id = 'infovendedor' class=' text-center align-items-center'>
                                        <a id='notacartaatras'>4.2</a><img class='imglikeduser' src='../modelo/" . $resultadovende['foto'] . "'>
                                        <p id='nombrecartaatras'>" . $resultadovende['nombre'] . " " . $resultadovende['apellido'] . "</p>
                                        <a id='ven' class='icon-chart-pie-outline'>Ventas: 23</a>    
                                        <a style='font-size: 14px;; color: #339900;'class='icon-mobile'>  " . $resultadovende['telefono'] . "</a>
                                        <div class='ec-stars-wrapper'>
                                            <a href='#' data-value'1'>&#9733;</a>
                                            <a href='#' data-value'2'>&#9733;</a>
                                            <a href='#' data-value'3'>&#9733;</a>
                                            <a href='#' data-value'4'>&#9733;</a>
                                            <a href='#' data-value'5'>&#9733;</a>
                                        </div>
                                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>     
                                        <br>
                                        <div class='mt-4'>
                                            <a href='../modelo/eliminarartifav.php?id=" . $idproducto . "' class='icon-cancel m-2' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a>";
                            echo"           </div>
                                    </div>
                             </div>  
                        </div>
                    </div>
                </div>";
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

                                        <div class="mt-4">
                                            <a href="../modelo/eliminarartifav.php?id=' . $idproducto . '" class="icon-cancel m-2" id="iconyes"></a><a href="articulo.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a>';
                            echo'           </div>
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                        }
                    }
                }
            } else {
                echo '<section class="container-fluid">   
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-12 col-lg-8 col-md-10 pt-5 pb-5 text-center" id="">
                            <p class="titleliked">Haz una busqueda y sigue los articulos que te interesan</p>
                            <p class="subtitleliked" style=" color: #cccc00">Aqui apareceran los articulos que quieres darle seguimiento, aqui podras tomar una descicion</p>
                            <a class="mas">Vamos a buscar un articulo interesante</a>
                        </div>
                    </div>   
                  </section>

                ';
            }
            ?>
        </div>
    </section>
    <section class="container-fluid mt-5 mb-5"  style="background:white;">
        <div class="row text-center">
            <?php
            require '../Modelo/conexion.php';
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
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
            $iduser = $_SESSION['id'];
            $sqlarticulospaw = mysqli_query($conexion, "SELECT * FROM `easy`.`liked` WHERE `likeid`='$iduser';");
            $rowcountf = mysqli_num_rows($sqlarticulospaw);
            if ($rowcountf > 0) {

                while ($resultado1 = mysqli_fetch_array($sqlarticulospaw)) {
                    $articuloliked = $resultado1["idarticulo"];
                    $sqlarticulospa1 = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `id`='$articuloliked';");
//      $can_pag = ceil($no_reg / $reg_por_pag);        

                    while ($resultado = mysqli_fetch_array($sqlarticulospa1)) {
                        $idproducto = $resultado['id'];

                        $idai = $resultado['id'];
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
                        if ($resultado['donativo'] == 1) {
                            echo "";
                        } else {


                            echo'
                    <div class="col-4 text-center mt-3">
                        <p class="pa icon-doc">' . $resultado['titulo'] . '</p>
                        <p class="pa icon-location" style="color: #009999">' . $resultado['zona'] . '</p>
                        <a class="pa icon-money" style="color: #006600"> ' . $resultado['precio'] . '</a><a class="icon-calendar" style="color: #cccc00"> ' . $resultado['fecha'] . '</a><a class="icon-eye" data-toggle="modal" data-target="#exampleModall' . $idproducto . '" href="#" style="color: #dc6e00;text-decoration:none;"> Ver mas informacion</a>
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

                                        </div>

                                        <a href="../modelo/eliminarartifav.php?id=' . $idai . '" class="icon-cancel" id="iconyes"  style="border-radius:0%;">Dejar de seguir</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>';
                        }
                    }
                }
            } else {
                echo '';
            }
            ?>
        </div>
    </section>
</section>
<div id="ventalink"></div>