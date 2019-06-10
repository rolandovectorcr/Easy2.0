
<section class="container-fluid" style="background-color: white">
        <div class="row justify-content-around" style="background-color: white">
            <?php
            $id = $_SESSION['id'];
            require '../modelo/conexion.php';
            $sqlventas = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `idvendedor`='$id';");
            $rowcount = mysqli_num_rows($sqlventas);
            if ($rowcount > 0) {
                echo'<section class="container-fluid">   
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-12 col-lg-10 col-md-12 pt-5 pb-2 text-center">
                            <p class="titleliked">Desde aqui puedes ver los productos que estas ofrecieindo</p>
                        </div>
                    </div>   
                  </section>';
                while ($res = mysqli_fetch_array($sqlventas)) {
                    $donativo;
                    if ($res['donativo'] == 1) {
                        $donativo = "Codigo de donacion: ";
                    } else {
                        $donativo = "Publicacion gratis";
                    }
                    $calidad;
                    $iconcalidad;
                    if ($res['calidad'] == 1) {
                        $calidad = "Articulo nuevo";
                        $iconcalidad = "icon-gift";
                    } else {
                        $calidad = "Articulo usado";
                        $iconcalidad = "icon-tv";
                    }
                    $idproductoventa = $res['id'];
                    if ($res['donativo'] == 0) {
                        echo "";
                    } else {
                        echo "<style>
                            #img1{
                                background-image: url(../modelo/" . $res['fotoart'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img2{
                                background-image: url(../modelo/" . $res['fotoart2'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img3{
                                background-image: url(../modelo/" . $res['fotoart3'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img4{
                                background-image: url(../modelo/" . $res['fotoart4'] . ");
                                background-size: cover;
                                height:75px;
                                }
                            #img5{
                                background-image: url(../modelo/" . $res['fotoart5'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img6{
                                background-image: url(../modelo/" . $res['fotoart6'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img7{
                                background-image: url(../modelo/" . $res['fotoart7'] . ");
                                background-size: cover;
                                height:75px;
                            }
                            #img8{
                                background-image: url(../modelo/" . $res['fotoart8'] . ");
                                background-size: cover;
                                height:75px;
                            }
                        </style>
                                    <div class='col-12 text-center mt-5 mb-5'>
                                    <div class='row justify-content-around'>
                                    <div class='col-6 text-center'>
                                        <p class='' id='tituloventa' style='font-size:35px; color: #d48817; margin:15px;' name='tituloventa'>" . $res['titulo'] . "</p>
                                        <div id='infoventa'>
                                            <p id='categoriad' class='icon-tags icon-tag'  name='categoriaventa'>" . $res['categoria'] . "</p>  
                                            <p id='precioa' class='icon-money' name='precioventa'>₡ " . $res['precio'] . "</p>
                                            <p id='ubicaciona' class='icon-location icon-calendar' name='ubicacionventa'>" . $res['zona'] . "</p>
                                            <p class = 'icon-truck' id = 'env'>Metodo de envio</p>";
                        $envio = $res['envio'];
                        if ($envio) {
                            if ($envio == "correo") {
                                $iconenv = "icon-mail-1";
                                $envi = "Envio por correo";
                                echo "<p id = 'env' name = 'env' class = '$iconenv'>$envi</p>";
                            }
                            if ($envio == "reunion") {
                                $iconenv = "icon-handshake-o";
                                $envi = "Reunion en un punto cercano";
                                echo "<p id = 'env' name = 'env' class = '$iconenv'>$envi</p>";
                            }
                            if ($envio == "casa") {
                                $iconenv = "icon-home-outline";
                                $envi = "Se entrega en tu casa";
                                echo "<p id = 'env' name = 'env' class = '$iconenv'>$envi</p>";
                            }
                        } else {
                            echo "<p id = 'env' name = 'env' class = 'icon-truck'>No hay metodo todavia</p > ";
                        }
                        if ($calidad == "Articulo usado") {
                            echo" <p class='" . $iconcalidad . "'id='calidad' name='calidad'>" . $calidad . " " . $res['estado'] . "/10</p>";
                        } else {
                            echo" <p class='" . $iconcalidad . "'id='calidad' name='calidad'>" . $calidad . "</p>";
                        }
                        if ($res['donativo'] == 1) {
                            echo"  <p id='coddonacion' class='icon-dollar' name='coddonacion'>Codigo de donacion: " . $res['coddonativo'] . " </p>";
                        } else {
                            echo"  <p id='coddonacion'class='icon-doc' name='coddonacion'>Publicacion gratis</p>";
                        }

                        $likes = 0;
                        $sqlarticulolik = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`");
                        while ($resultadol = mysqli_fetch_array($sqlarticulolik)) {
                            if ($resultadol['idarticulo'] == $idproductoventa) {
                                $likes = $likes + 1;
                            }
                        }
                        echo "
                                        </div>
                                        
                                        <div class='row justify-content-around'>
                                            <a class='col-sm-12 col-md-2 col-lg-3 icon-heart' id='contadorlikes'> " . $likes . "</a>
                                            <a class='col-sm-3 col-md-2 col-lg-2 icon-cancel' style='color:#990000;'    id='panel' href='../modelo/eliminararticulo.php?articulo=" . $idproductoventa . "'>Eliminar</a>
                                            <a class='col-sm-3 col-md-2 col-lg-2 icon-pencil' style='color:#adad02; font-size:14px;'   id='panel' href=''>Actualizar</a>
                                            <a class='col-sm-3 col-md-2 col-lg-2 icon-doc' style='color:#009999;' id='panel' href='articulo.php?articulo=" . $idproductoventa . "'>Pagina</a>
                                            <a class='col-sm-3 col-md-2 col-lg-2 icon-money' style='color:#006600;'  id='panel' href = '#'>Vendido</a>                                           
                                        </div>
                                        ";


                        require "../Modelo/conexion.php";
                        $sentenciabusqueda = "SELECT * FROM `easy`.`mensaje` WHERE `idarticulo` LIKE '%$idproductoventa%' ";
                        $result = mysqli_query($conexion, $sentenciabusqueda);
                        $rowcountr = mysqli_num_rows($result);
                        if ($rowcountr > 0) {
                            while ($resultado = mysqli_fetch_array($result)) {
                                echo"
                                                <div class='mt-5'>
                                        <div class='row  justify-content-around align-items-center'>
                                            <a class='col-sm-3 col-md-2 col-lg-4 icon-user' style='color:#d48817;'    id='panel2' '>" . $resultado['nombre'] . "</a>
                                            <a class='col-sm-3 col-md-2 col-lg-3 icon-mobile' style='color:#adad02;'   id='panel2' > " . $resultado['telefono'] . "</a>
                                            <a class='col-sm-3 col-md-2 col-lg-4 icon-mail' style='color:#006600;' id='panel2'> " . $resultado['correo'] . "</a>   
                                            <a class='col-sm-3 col-md-2 col-lg-1 icon-cancel' id='cancel' href='../modelo/deletecoment.php?articulo=" . $resultado['id'] . "'></a>
                                        </div>
                                        <div class='row  justify-content-around align-items-center'>
                                        <div class='col-8 text-left' id='panel2'>
                                                    <img  src='" . $resultado['imgmensaje'] . "' class='imgcomen'>
                                                    <a style='color:#666666;'>      " . $resultado['mensaje'] . "</a>
                                                </div>                                
                                            <a class='col-sm-3 col-md-2 col-lg-4' style='color:#999999;'    id='panel2' '> " . $resultado['fecha'] . "</a>
                                            </div>
                                       </div>";
                            }
                        } else {
                            echo 'No hay articulos en el registro';
                        }
                        echo'
                                        </div>
                                    <div class="col-6">
                                    <form  action="../modelo/addcoment.php" method="post"  enctype="multipart/form-data">
                                    <div class="row  align-items-center justify-content-around text-center">
                                        <p style="font-size: 30px; color: #cccc00;">Comentario nuevo</p>
                                        <input style="border: none; border-bottom: 1px solid #999999;" class="col-10 rale p-2 m-2" name="comentario" type="text" placeholder="Comentario nuevo">
                                        <input type="text" name="nombre" value="' . $_SESSION['nombre'] . " " . $_SESSION['apellido'] . '" style="display:none">';
                                        if (@!$_SESSION['nombre']) {
                                            $fotocomentante = "../vista/img/us.png";
                                        } else {
                                            $fotocomentante = $_SESSION['foto'];
                                        }
                                        echo'
                                        <input type="text" name="idarticulo" value="'. $idproductoventa .'" style="display:none">
                                        <input type="text" name="idanunciante" value="'. $id .'" style=" display:none">
                                        <input type="text" name="idcomentante" value="'. $id .'" style=" display:none">
                                        <input type="text" name="fotocomentante" value="../modelo/'. $fotocomentante .'" style="display:none">
                                        <input type="submit" value="Deja tu mensaje" class="btn btn-secondary u col-5 rale">
                                    </div>
                                </form>
                                <div class="row">';
                        require "../Modelo/conexion.php";
                        $sentenciabusqueda = "SELECT * FROM `easy`.`comentarios` WHERE `idarticulo` LIKE '%$idproductoventa%' ";
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
                        echo "
                                        </div>
                                </div>
                            </div>
                                    </div>";
                    }
                }
            } else {
                echo '<section class="container-fluid">   
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-12 col-lg-8 col-md-10 pt-5 pb-5 text-center" id="">
                            <p class="titleliked">Haz una busqueda y sigue los articulos que te interesan</p>
                            <p class="subtitleliked">Aqui apareceran los articulos que quieres darle seguimiento, aqui podras tomar una descicion</p>
                            <a class="mas">Vamos a buscar un articulo interesante</a>
                        </div>
                    </div>   
                  </section>

                ';
            }
            mysqli_close($conexion);
            ?>
        </div>
    </section>
</body>
<p style="color: #666666"></p>
<div class="container-fluid">
    <div class="row">
        <?php
        $id2 = $_SESSION['id'];
        require '../modelo/conexion.php';
        $sqlventas2 = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `idvendedor`='$id2';");
        $rowcount3 = mysqli_num_rows($sqlventas2);
        if ($rowcount3 > 0) {
            while ($res = mysqli_fetch_array($sqlventas2)) {
                $donativo;
                if ($res['donativo'] == 1) {
                    $donativo = "Codigo de donacion: ";
                } else {
                    $donativo = "Publicacion gratis";
                }
                $idproductoventa = $res['id'];
                $likes = 0;
                        $sqlarticulolik = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`");
                        while ($resultadol = mysqli_fetch_array($sqlarticulolik)) {
                            if ($resultadol['idarticulo'] == $idproductoventa) {
                                $likes = $likes + 1;
                            }
                        }
                if ($res['donativo'] == 0) {
                    echo '<div class="col-4 text-center mt-3">
                        <p class="pa icon-doc">' . $res['titulo'] . '</p>
                        <p class="pa icon-location" style="color: #009999">' . $res['zona'] . '</p>
                        <a class="pa icon-money" style="color: #006600"> ' . $res['precio'] . '</a><a class="icon-calendar" style="color: #cccc00"> ' . $res['fecha'] . '</a>';
                    echo"<div class='row justify-content-around mt-4 mb-2'>
                                            <a class='col-sm-12 col-md-2 col-lg-3 icon-heart' id='contadorlikes2'> " . $likes . " </a>
                                            <a class='col-sm-3 col-md-2 col-lg-3 icon-cancel' style='color:#990000;'    id='panel3' href='../modelo/eliminararticulo.php?articulo=" . $idproductoventa . "'>Eliminar</a>
                                            <a class='col-sm-3 col-md-2 col-lg-3 icon-pencil' style='color:#adad02;'   id='panel3' href=''>Actualizar</a>
                                            <a class='col-sm-3 col-md-2 col-lg-3 icon-money' style='color:#009999;'  id='panel3' href = '#'>Vendido</a>
                                            
                                        </div>";
                    
                    echo'
                            
                        <div class="row align-items-center mt-2 text-center justify-content-around">
                            
                        </div>
                    </div>';
                } else {
                    echo "";
                }
            }
        }
        ?>
    </div>
</div>