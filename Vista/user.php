<?php
#Este pedacito se encarga de q si no hay logeado ningun usuario no se pueda accesar desde la url
session_start();
# el @ es para manejar cualquier error que pueda ocurrir y la ! es para decir: si no hay user
if (@!$_SESSION['nombre']) {
    #si no ha iniciado nos redireccione a index.php
    header("Location:../index.php");
}
?>
<head>
    <title><?php
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head> 

<section class="container-fluid front4 p-3">   
    <nav class="navbar navbar-inverse  navbar-toggleable-md navbar-light bg-faded mb-5" style="background: transparent; font-size: 20px;z-index: 2;opacity: 0.95">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent m-auto">
            <ul class="navbar-nav mr-auto ml-auto text-center">

                <li class="nav-item dropdown">
                    <a id="navw"  class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Desktop
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar"  href="category.php?category=Desktop">Desktop</a>
                        <a class="dropdown-item ar"  href="category.php?category=Servidor">Servidor</a>  
                        <a class="dropdown-item ar"  href="category.php?category=Gamer">Gamer</a>

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navw" class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Notebooks Portatiles
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar" href="category.php?category=Laptop HP" >HP</a>
                        <a class="dropdown-item ar" href="category.php?category=Laptop Dell">Dell</a>      
                        <a class="dropdown-item ar" href="category.php?category=Laptop Toshiba">Toshiba</a> 
                        <a class="dropdown-item ar" href="category.php?category=Laptop Apple">Apple</a>    

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navw" class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Arma tu PC
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar" href="category.php?category=Monitores">Monitores</a>
                        <a class="dropdown-item ar" href="category.php?category=Procesadores">Procesadores</a>      
                        <a class="dropdown-item ar" href="category.php?category=Caja/Case">Caja/Case</a> 
                        <a class="dropdown-item ar" href="category.php?category=Memoria RAM">Memoria RAM</a>  
                        <a class="dropdown-item ar" href="category.php?category=Targeta de video">Targeta de video</a>
                        <a class="dropdown-item ar" href="category.php?category=Discos Duros">Discos Duros</a>
                        <a class="dropdown-item ar" href="category.php?category=Targeta madre">Targeta madre</a>                       
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navw" class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tablets y celulares
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar"  href="category.php?category=Ipad">Ipad</a>
                        <a class="dropdown-item ar" href="category.php?category=Tablets">Tablets</a>   
                        <a class="dropdown-item ar" href="category.php?category=Iphone">Iphone</a>
                        <a class="dropdown-item ar" href="category.php?category=Nokia">Nokia</a> 
                        <a class="dropdown-item ar"  href="category.php?category=Samnsung">Samnsung</a>
                        <a class="dropdown-item ar" href="category.php?category=Otros Celulares">Otros Celulares</a>
                        <a class="dropdown-item ar" href="category.php?category=Accesorio para celulares">Accesorio para celulares</a>                
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navw" class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Impresoras
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar "  href="category.php?category=Impresora EPSON">EPSON</a>
                        <a class="dropdown-item ar" href="category.php?category=Impresora HP" >HP</a>
                        <a class="dropdown-item ar" href="category.php?category=Impresora Brother">Brother</a>      
                        <a class="dropdown-item ar" href="category.php?category=Impresora Canon">Canon</a>  
                        <a class="dropdown-item ar" href="category.php?category=Impresora Xerox">Xerox</a>  
                        <a class="dropdown-item ar" href="category.php?category=Impresora Samsung">Samsung</a> 
                        <a class="dropdown-item ar" href="category.php?category=Cartuchos originales">Cartuchos originales</a> 
                        <a class="dropdown-item ar" href="category.php?category=Cartuchos genericos">Cartuchos genericos</a> 

                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a id="navw" class=" nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Accesorios
                    </a>
                    <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item ar" href="category.php?category=Parlantes">Parlantes</a>
                        <a class="dropdown-item ar" href="category.php?category=Teclado">Teclado</a>
                        <a class="dropdown-item ar" href="category.php?category=Mouse">>Mouse</a>      
                        <a class="dropdown-item ar" href="category.php?category=Headsets/Auriculares">Headsets/Auriculares</a>  
                        <a class="dropdown-item ar" href="category.php?category=Baterias">Baterias</a>  
                        <a class="dropdown-item ar"  href="category.php?category=Fundas, maletines y estuches">Fundas, maletines y estuches</a> 
                        <a class="dropdown-item ar"  href="category.php?category=Cargadores">Cargadores</a> 
                        <a class="dropdown-item ar" href="category.php?category=Memorias">Memorias USB</a>                    
                    </div>
                </li>


            </ul>
        </div>
    </nav>

    <form action="busqueda.php" method="GET" class="form-inline my-2 my-lg-0"> 
        <div class="container-fluid">
            <div class="row">
                <div class="col-7">
                    <input class="form-control mr-sm-2 rale noborder " type="text" name="titulobusq" placeholder="Busca articulos aqui">
                </div>
                <div class="col-4">
                    <button id="encontrar" class="btn btn-outline-success my-2 my-sm-0 icon-search noborder" type="submit">Encontrar</button>
                </div>
            </div>
        </div>
    </form>
    <div class="container-fluid">
        <div class="row d-flex justify-content-around">
            <div class=" card col-sm-12 col-lg-3 col-md-4 align-items-center" style="background: transparent; width: 20rem;">
                <div class="row">
                    <div class="col-12"><img class="img-card-top-2" src="../modelo/<?php echo $_SESSION['foto'] ?>"   alt="Card image cap"></div>
                </div><div class="card-block">
                    <a style="font-size: 30px;color: #cccc00;">4.2</a><a style="font-size: 25px;color: white;"> <?php echo $_SESSION['nombre']; ?> <?php echo $_SESSION['apellido']; ?></a>       
                    <br><div class='ec-stars-wrapper'>
                        <a href='#' data-value="1">&#9733;</a>
                        <a href='#' data-value="2">&#9733;</a>
                        <a href='#' data-value="3">&#9733;</a>
                        <a href='#' data-value="4">&#9733;</a>
                        <a href='#' data-value="5">&#9733;</a>
                    </div>
                    <br>
                    <div class="mt-5">
                        <a href="Perfil.php" class='icon-user-1' id='iconyes3'></a>
                        <a href="Perfil.php" id='iconyes3' class='icon-doc iconyes2'></a>
                        <a href="Perfil.php" id='iconyes3' class='icon-graduation-cap-1 iconyes2'></a><br>
                        <a href="Perfil.php" class="iconaction mt-2">Dashboard</a><br>
                        <a href="Perfil.php" class="iconaction mt-2">Publica un producto</a><br>
                        <a href="Perfil.php" class="iconaction mt-2">Blog</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-8 pt-5 pb-5 text-center" id="">
                <?php
                $id = $_SESSION['id'];
                require '../modelo/conexion.php';
                $sqlventas = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `idvendedor`='$id';");
                $rowcount = mysqli_num_rows($sqlventas);
                if ($rowcount < 0) {
                    echo'<section class="container-fluid">   
                    <div class="row d-flex justify-content-around">
                        <div class="col-sm-12 col-lg-10 col-md-12 pt-5 pb-2 text-center">
                            <p class="titleliked">Desde aqui puedes ver los productos que estas ofrecieindo</p>
                        </div>
                    </div>   
                  </section>';
                } else {
                    while ($res = mysqli_fetch_array($sqlventas)) {
                        $idproductoventa = $res['id'];
                        require "../Modelo/conexion.php";
                        $sentenciabusqueda = "SELECT * FROM `easy`.`mensaje` WHERE `idarticulo` LIKE '%$idproductoventa%' ";
                        $result = mysqli_query($conexion, $sentenciabusqueda);
                        $rowcountr = mysqli_num_rows($result);
                        if ($rowcountr > 0) {
                            while ($resultado = mysqli_fetch_array($result)) {
                                require "../Modelo/conexion.php";
                                $sentenciabusqueda7 = "SELECT * FROM `easy`.`article` WHERE `id` LIKE '%$idproductoventa%' ";
                                $result7 = mysqli_query($conexion, $sentenciabusqueda7);
                                $resultado7 = mysqli_fetch_array($result7);
                                echo"
                                                <div class='mt-2 fbr'>
                                        <div class='row  justify-content-around align-items-center'>
                                            <a class='col-sm-3 col-md-2 col-lg-10 icon-mail' style='color:#009999;'    id='panel2' '>" . $resultado7['titulo'] . "</a> 
                                            <a class='col-sm-3 col-md-2 col-lg-2 icon-cancel' id='cancel' href='../modelo/deletecoment.php?articulo=" . $resultado['id'] . "'></a>
                                        </div>
                                        <div class='row  justify-content-around align-items-center'>
                                        <div class='col-7 text-left' id='panel2'>
                                                    <img  src='" . $resultado['imgmensaje'] . "' class='imgcomen'>
                                                        <a style='color:#cccc00;'>     " . $resultado['nombre'] . "</a><br>
                                                    <a style='color:#666666;'> " . $resultado['mensaje'] . "</a>
                                                </div>                                
                                            <a class='col-sm-3 col-md-2 col-lg-3' style='color:#999999;'    id='panel2' '> " . $resultado['fecha'] . "</a>
                                            </div>
                                       </div>";
                            }
                        } else {
                            echo '';
                        }
                    }
                }
                ?>
            </div>
            <div class="col-sm-12 col-lg-4 col-md-8 pt-5 pb-5 text-center" id="">
                <?php
                $id = $_SESSION['id'];
                require '../modelo/conexion.php';
                $sqlventas = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `idvendedor`='$id';");
                $rowcount = mysqli_num_rows($sqlventas);
                if ($rowcount < 0) {
                    
                } else {
                    while ($res = mysqli_fetch_array($sqlventas)) {
                        $idproductoventa = $res['id'];
                        require "../Modelo/conexion.php";
                        $sentenciabusqueda = "SELECT * FROM `easy`.`mensaje` WHERE `idarticulo` LIKE '%$idproductoventa%' ";
                        $result = mysqli_query($conexion, $sentenciabusqueda);
                        $rowcountr = mysqli_num_rows($result);
                        if ($rowcountr > 0) {
                            while ($resultado = mysqli_fetch_array($result)) {
                                require "../Modelo/conexion.php";
                                $sentenciabusqueda = "SELECT * FROM `easy`.`comentarios` WHERE `idarticulo` LIKE '%$idproductoventa%' ";
                                $result = mysqli_query($conexion, $sentenciabusqueda);
                                $rowcountr = mysqli_num_rows($result);
                                if ($rowcountr > 0) {
                                    while ($resultado = mysqli_fetch_array($result)) {
                                        require "../Modelo/conexion.php";
                                        $sentenciabusqueda7 = "SELECT * FROM `easy`.`article` WHERE `id` LIKE '%$idproductoventa%' ";
                                        $result7 = mysqli_query($conexion, $sentenciabusqueda7);
                                        $resultado7 = mysqli_fetch_array($result7);
                                        echo'<div class="mt-2 fbr">
                                            <div class="row  justify-content-around align-items-center">
                                            <a class="col-sm-3 col-md-2 col-lg-10 icon-comment" style="color:#999999;"    id="panel2">' . $resultado7['titulo'] . '</a> 
                                            <a class="col-sm-3 col-md-2 col-lg-2 icon-cancel" id="cancel" href="../modelo/deletecoment.php?articulo=' . $resultado['id'] . '"></a>
                                            <div class="col-2">
                                                    <img  src="' . $resultado["imgcomentante"] . '" class="imgcomen">
                                                </div>
                                                <div class="col-9 text-left comenl"> 
                                                    <a style="color: ' . $resultado["color"] . '">' . $resultado["nombre"] . '  </a><a>' . $resultado["comentario"] . '  </a><a style="color:silver"> ' . $resultado["fecha"] . '</a>
                                                </div>
                                                </div>
                                </div>';
                                    }
                                } else {
                                    echo 'No hay articulos en el registro';
                                }
                            }
                        } else {
                            echo '';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>


</div>   
</section>
<?php
include './navuser.php';
?>
<style>
    .bot{
        padding: 10px;
        border: 1px solid #cccccc;
        color: #cccccc;
        font-size: 30px;
        text-align: center;
        display: block;
        margin: 30px;
        text-decoration: none;
        transition: all 0.5s
    }
    .bot:hover{
        text-decoration: none;
        padding: 10px;
        border: 1px solid white;
        color: white;
        font-size: 30px;
        text-align: center;
        display: block;
        margin: 30px;
    }
</style>
<section class="container-fluid  mt-5" style="background-image: url(Img/banner10.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
   
        <div class = 'row'>          
            <div class = 'col-sm-12 col-md-6 col-lg-6 p-5 ' style="background:white">
                
            </div>
            <div class = 'col-sm-12 col-md-6 col-lg-6 p-5 ' >
                <a href="#" class="bot">Aqui va alguna opcion de venta o feature de la pagina</a>
                <a href="#" class="bot">Aqui va alguna opcion de venta o feature de la pagina</a>
                <a href="#" class="bot">Aqui va alguna opcion de venta o feature de la pagina</a>
            </div>
        </div>
</div>
</div>
</section>
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
            require '../modelo/conexion.php';



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
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
                    <a class='icon-heart m-2'  href='../modelo/likedsell.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a href='../modelo/cart.php?cart=". $idproducto ."' id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
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

                                        <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a href="articulosell.php?articulo=' . $idproducto . '"   id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
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
<section id="articulo" class="container-fluid mt-5">
    <div class="row">

        <div class="col-10 pt-3">

            <?php
            require '../modelo/conexion.php';



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
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>      <br>    <br>       
                    <a class='icon-heart m-2'  href='../modelo/likedsell.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a href='../modelo/cart.php?cart=". $idproducto ."' id='iconyes' class='icon-basket-1 m-2 iconyes'></a>";
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

                                        <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a href="articulosell.php?articulo=' . $idproducto . '"   id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
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
<section class="container-fluid mt-5">
    <div class="row  mt-5">
        <div class="col-12">
            <p class="cateuser cat" style="font-size:40px">Arma tu PC</p>
            <div class="row mt-5 align-items-center justify-content-around">
                <?php
                require '../modelo/conexion.php';
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
                        <div class="col-12 align-items-center justify-content-around text-center"><br>
                            <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a data-toggle="modal" data-target="#exampleModal' . $idproducto . '" id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
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

                                        <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a   href="articulosell.php?articulo=' . $idproducto . '" id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
                 </form>
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
<section class="container-fluid mt-5">
    <div class="row  mt-5">
        <div class="col-12">
            <p class="cateuser cat" style="font-size:40px">Laptops y Portatiles</p>
            <div class="row mt-5 align-items-center justify-content-around">
                <?php
                require '../modelo/conexion.php';
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
                        echo "<a class='icon-heart m-2'  href='../modelo/likedsell.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a href='../modelo/cart.php?cart=". $idproducto ."' id='iconyes' class='icon-basket-1 m-2 iconyes'></a>
                       ";
                        echo '</div> 
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

                                        <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a   href="articulosell.php?articulo=' . $idproducto . '" id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
                 </form>
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
<section class="container-fluid mt-5">
    <div class="row  mt-5">
        <div class="col-12">
            <p class="cateuser cat" style="font-size:40px">Tablets y celulares</p>
            <div class="row mt-5 align-items-center justify-content-around">
                <?php
                require '../modelo/conexion.php';
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
                        echo "<a class='icon-heart m-2'  href='../modelo/likedsell.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a><a href='../modelo/cart.php?cart=". $idproducto ."' id='iconyes' class='icon-basket-1 m-2 iconyes'></a>
                       ";
                        echo '</div> 
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

                                        <a class="icon-heart m-2"  href="../modelo/likedsell.php?id=' . $idproducto . '" id="iconyes"></a><a   href="articulosell.php?articulo=' . $idproducto . '" id="iconyes" class="icon-eye m-2 iconyes"></a><a href="../modelo/cart.php?cart='. $idproducto .'" id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
                 </form>
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

<section class="container-fluid  mt-5" style="background-image: url(Img/row-of-pc-gamers-byoc-lan-quakecon-150723-p.jpg);background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
    <div class = 'col-sm-12 col-md-6 col-lg-6 p-5 ' style="background:white">
        <div class = 'row'>          
            <div class = 'col-sm-12 col-md-6 col-lg-6 '>
                <div class='lado frente te text-center'>
                    <a><img class='imglikedarti' src='../Modelo/articulo/1682.jpg'></a>
                    <div id='infodeventa'>
                        <p style="color:black">Casa en la fortuna de San Carlos, comoda y bella</p>
                        <p style="color: #336600"> ₡ 120.000.000</p>
                        <p style="color: #009999">La fortuna de San Carlos</p>
                        <p style="color: #cc6600">Envio por correo</p>
                        <p style="color: #cccc00">27/07/2017</p>                        
                    </div>
                </div>
            </div>


            <div class = 'col-sm-12 col-md-6 col-lg-6 d-flex align-items-center'>
                <div class = 'lado atras'>
                    <div id = 'infovendedor' class='te text-center align-items-center'>
                        <p style="color: #009999;font-size: 30px;">Oferta del dia</p>
                        <a id='notacartaatras'>4.2</a><img class='imglikeduser' src='../modelo/perfil/federico_h.jpg'>
                        <p >Rolando Arguello Lizano</p>
                        <a class='icon-chart-pie-outline'>Ventas: 23</a>    
                        <a class='icon-phone-outline'>89213438</a>
                        <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>     <br><br>
                        <a class="icon-heart m-3" id="iconyes"></a><a id="iconyes" class="icon-eye m-3"></a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
</section>
<section id="articulo">
    <?php
    require '../modelo/conexion.php';



    // Categoria de carros!
    $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`article` WHERE `categoria`='casa';");
    $no_reg = mysqli_num_rows($sqlarticulos);
    $rand = rand(1, $no_reg);
    if ($no_reg == 0) {
        echo 'No se han encontrado registros';
    }
    $reg_por_pag = 18;
    @$nro_pag = $_GET['num'];
    if (is_numeric($nro_pag)) {
        $inicio = ($nro_pag - 1) * $reg_por_pag;
    } else {
        $nro_pag = 1;
        $inicio = 0;
    }
    $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article` LIMIT $inicio,$reg_por_pag;");
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
                <a><img src='../modelo/" . $resultado['fotoart'] . "'></a>
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
            <a id='notacartaatras'>4.2</a><img src='../modelo/" . $resultadovende['foto'] . "'>
                    <p id='nombrecartaatras'>" . $resultadovende['nombre'] . " " . $resultadovende['apellido'] . "</p>
                    <div class='ec-stars-wrapper'>
                            <a href='#' data-value'1'>&#9733;</a>
                            <a href='#' data-value'2'>&#9733;</a>
                            <a href='#' data-value'3'>&#9733;</a>
                            <a href='#' data-value'4'>&#9733;</a>
                            <a href='#' data-value'5'>&#9733;</a>
                        </div>
                        <noscript>Necesitas tener habilitado javascript para poder votar</noscript>  <br><br>              
                    <a class='icon-heart m-2'  href='../modelo/liked.php?id=" . $idproducto . "' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModale" . $idproducto . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a>";
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
        require '../Modelo/conexion.php';
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
        $sqlarticulospa = mysqli_query($conexion, "SELECT * FROM `easy`.`article`");
//        $can_pag = ceil($no_reg / $reg_por_pag);

        if ($sqlarticulospa) {
            while ($resultado = mysqli_fetch_array($sqlarticulospa)) {
                $idproducto2 = $resultado['id'];
                if ($resultado['donativo'] == 1) {
                    echo "";
                } else {


                    echo '
                    <div class="col-4 text-center mt-3">
                        <p class="pa icon-doc">' . $resultado['titulo'] . '</p>
                        <p class="pa icon-location" style="color: #009999">' . $resultado['zona'] . '</p>
                        <a class="pa icon-money" style="color: #006600"> ' . $resultado['precio'] . '</a><a style="color: #cccc00" class="icon-calendar"> ' . $resultado['fecha'] . ' </a><a class="icon-eye" data-toggle="modal" data-target="#exampleModalo' . $idproducto2 . '" href="#" style="text-decoration:none;color: #dc6e00">Ver mas informacion</a>
                        <div class="row align-items-center mt-2 text-center justify-content-around">
                            <div style="border-bottom: 1px solid #999999" class="col-10"></div>
                        </div>
                    </div>';

                    $idvende = $resultado['idvendedor'];
                    $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                    $resultadovende = mysqli_fetch_array($sqlvendedor);
                    echo'
                    <div class="modal fade" id="exampleModalo' . $idproducto2 . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <a class="icon-heart m-2"  href="../modelo/liked.php?id=' . $idproducto2 . '" id="iconyes"></a>
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

