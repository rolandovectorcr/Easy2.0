<section class="container-fluid mt-5" id="house">   
    <div class="row d-flex justify-content-around">
        <div class=" card " style="width: 20rem;">
            <div class="row">
                <div class="col-12"><img class="img-card-top-2" src="Vista/Img/housei.jpg"   alt="Card image cap"></div>
            </div><div class="card-block">
                <h4 class="card-title">Aqui encuentra mas de cien opciones para escoger tu auto</h4>
                <a href="#" class="btn btn-primary">Encuentra mas autos aqui</a>
            </div>
        </div>
        <div class="col-8 p-5 text-center" id="">
            <p id="subtitle">Siempre toma en cuenta los gastos fijos que puede tener un auto, elije el que mas te convenga</p>
        </div>
    </div>   
</section>
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
        $reg_por_pag = 6;
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
                echo "<body>
    <div class='carta-container'>
        <div class='carta'>
            <div class='lado frente'>
                <a><img src='modelo/" . $resultado['fotoart'] . "'></a>
                    <div id='infodeventa'>
                        <p>" . $resultado['titulo'] . "</p>
                        <p id='precioa'> ₡ " . $resultado['precio'] . "</p>
                        <p id='ubicaciona'> " . $resultado['zona'] . "</p>";
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

                echo"<p id='fecha' name'fecha'> " . $resultado['fecha'] . "</p>";
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
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>                 
                    <br><a href='vista/articulo.php?articulo=" . $idproducto . "' class='btn btn-primary'>Mas Informacion</a>";
                echo"
                   
        </div>
        </div>
        </div>
        </div>
        </body>";
            }
        } else {
            echo 'No hay articulos en el registro';
        }
        ?>
</section>
