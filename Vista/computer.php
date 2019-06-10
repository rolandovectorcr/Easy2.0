
<section id="articulo" class="container-fluid mt-5">
    <div class="row">
        <div class="col-2 articulosestrella pt-5">
            <p class="cuadroarti">En este mes, hemos logrado 100% calidad en estos articulos
            <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript></p>
        <a class="icon-star-1 iconyes4" href="#"></a>
        </div>
        <div class="col-10 pt-3">


            <?php
            require 'modelo/conexion.php';



            // Categoria de carros!
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
            $rand = rand(1, $no_reg);
            if ($no_reg == 0) {
                echo 'No se han encontrado registros';
            }
            $reg_por_pag = 4;
            @$nro_pag = $_GET['num'];
            if (is_numeric($nro_pag)) {
                $inicio = ($nro_pag - 1) * $reg_por_pag;
            } else {
                $nro_pag = 1;
                $inicio = 0;
            }
            $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` LIMIT $inicio,$reg_por_pag;");
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

                        $idproducto = $resultado['id'];
                        echo "<body>
    <div class='carta-containerssj'>
        <div class='cartassj'>
            <div class='ladossj frentessj'>
                <a><img src='modelo/" . $resultado['fotoart'] . "'></a>
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
            <a><img src='modelo/" . $resultado['fotoart2'] . "'></a>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
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
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
        </div>
    </div>
</section>
<section id="articulo" class="container-fluid">
    <div class="row">
        
        <div class="col-10 pt-3">


            <?php
            require 'modelo/conexion.php';



            // Categoria de carros!
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
            $rand = rand(1, $no_reg);
            if ($no_reg == 0) {
                echo 'No se han encontrado registros';
            }
            $reg_por_pag = 4;
            @$nro_pag = $_GET['num'];
            if (is_numeric($nro_pag)) {
                $inicio = ($nro_pag - 1) * $reg_por_pag;
            } else {
                $nro_pag = 1;
                $inicio = 0;
            }
            $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` LIMIT $inicio,$reg_por_pag;");
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

                        $idproducto = $resultado['id'];
                        echo "<body>
    <div class='carta-containerssj'>
        <div class='cartassj'>
            <div class='ladossj frentessj'>
                <a><img src='modelo/" . $resultado['fotoart'] . "'></a>
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
            <a><img src='modelo/" . $resultado['fotoart2'] . "'></a>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
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
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
        </div>
        <div class="col-2 articulosestrella pt-5">
            <p class="cuadroarti">En este mes, hemos logrado 100% calidad en estos articulos
            <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript></p>
        <a class="icon-star-1 iconyes4" href="#"></a>
        </div>
        
    </div>
</section>
<section id="articulo" class="container-fluid  justify-content-around">
    <div class="row ">
        
        <div class="col-12 pt-3">


            <?php
            require 'modelo/conexion.php';



            // Categoria de carros!
            $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell`;");
            $no_reg = mysqli_num_rows($sqlarticulos);
            $rand = rand(1, $no_reg);
            if ($no_reg == 0) {
                echo 'No se han encontrado registros';
            }
            $reg_por_pag = 5;
            @$nro_pag = $_GET['num'];
            if (is_numeric($nro_pag)) {
                $inicio = ($nro_pag - 1) * $reg_por_pag;
            } else {
                $nro_pag = 1;
                $inicio = 0;
            }
            $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` LIMIT $inicio,$reg_por_pag;");
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

                        $idproducto = $resultado['id'];
                        echo "<body>
    <div class='carta-containerssj'>
        <div class='cartassj'>
            <div class='ladossj frentessj'>
                <a><img src='modelo/" . $resultado['fotoart'] . "'></a>
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
            <a><img src='modelo/" . $resultado['fotoart2'] . "'></a>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
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
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
        </div>
        
        
    </div>
</section>
<section class="container-fluid mt-5">
    <div class="row  mt-5">
        <div class="col-12">
            <p class="cateuser cat" style="font-size:40px">Arma tu PC</p>
            <div class="row mt-5 align-items-center justify-content-around">
                <?php
                require 'modelo/conexion.php';
                $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='ArmatuPC';");
                $no_reg = mysqli_num_rows($sqlarticulos);

                if ($no_reg == 0) {
                    echo 'No se han encontrado registros';
                }

                $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='ArmatuPC' LIMIT 4;");

                if ($sqlarticulospa) {
                    while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                        $idproducto = $resultado['id'];
                        echo '
                    <div class="col-3">                
                    <div class="row ">
                        <div class="col-6 ">
                            <img src="modelo/' . $resultado['fotoart'] . '" width="125" height="100" style="object-fit: cover">
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
                        <div class="col-12 align-items-center justify-content-around text-center"><br>
                            <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" id="iconyes"></a><a  data-toggle="modal" data-target="#exampleModal' . $idproducto . '" href="#"  id="iconyes" class="icon-eye m-2 iconyes"></a><a  id="iconyes" class="icon-user m-2 iconyes" href="vista/newuser.php"></a>
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

                                        </div>

                                        <div class="m-4">
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
                            <p class="cateuser cat" style="font-size:40px">Tablets y celulares</p>
                            <div class="row mt-5 align-items-center justify-content-around">
                                <?php
                                require 'modelo/conexion.php';
                                $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='portatiles';");
                                $no_reg = mysqli_num_rows($sqlarticulos);

                                if ($no_reg == 0) {
                                    echo 'No se han encontrado registros';
                                }

                                $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='portatiles' LIMIT 4;");

                                if ($sqlarticulospa) {
                                    while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                                        $idproducto = $resultado['id'];
                                        echo '
                    <div class="col-3">                
                    <div class="row ">
                        <div class="col-6 ">
                            <img src="modelo/' . $resultado['fotoart'] . '" width="125" height="100" style="object-fit: cover">
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
                        <div class="col-12 align-items-center justify-content-around text-center"><br>
                            <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" id="iconyes"></a><a  data-toggle="modal" data-target="#exampleModal' . $idproducto . '" href="#"  id="iconyes" class="icon-eye m-2 iconyes"></a><a  id="iconyes" class="icon-user m-2 iconyes" href="vista/newuser.php"></a>
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

                                        </div>

                                        <div class="m-4">
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
                                            <p class="cateuser cat" style="font-size:40px">Accesorios</p>
                                            <div class="row mt-5 align-items-center justify-content-around">
<?php
require 'modelo/conexion.php';
$sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='Tablets/celulares';");
$no_reg = mysqli_num_rows($sqlarticulos);

if ($no_reg == 0) {
    echo 'No se han encontrado registros';
}

$sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `cate`='Tablets/celulares' LIMIT 4;");

if ($sqlarticulospa) {
    while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
        $idproducto = $resultado['id'];
        echo '
                    <div class="col-3">                
                    <div class="row ">
                        <div class="col-6 ">
                            <img src="modelo/' . $resultado['fotoart'] . '" width="125" height="100" style="object-fit: cover">
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
                        <div class="col-12 align-items-center justify-content-around text-center"><br>
                            <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" id="iconyes"></a><a  data-toggle="modal" data-target="#exampleModal' . $idproducto . '" href="#"  id="iconyes" class="icon-eye m-2 iconyes"></a><a  id="iconyes" class="icon-user m-2 iconyes" href="vista/newuser.php"></a>
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

                                        </div>

                                        <div class="m-4">
                <a class="icon-emo-thumbsup m-2" data-toggle="modal" data-target="#exampleModal" href="#" id="iconyes"></a><a href="vista/articulosell.php?articulo=' . $idproducto . '"  id="iconyes" class="icon-eye m-2 iconyes"></a><a href="vista/newuser.php" id="iconyes" class="icon-user m-2 iconyes"></a>
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
