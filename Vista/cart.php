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
<?php include './navuser.php'; ?>
<section class="container">
    <?php
    require '../Modelo/conexion.php';
    $sqlarticulos = mysqli_query($conexion, "SELECT * FROM `easy`.`cart`;");
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
    $sqlarticulospaw = mysqli_query($conexion, "SELECT * FROM `easy`.`cart` WHERE `idbuyer`='$iduser';");
    $rowcountf = mysqli_num_rows($sqlarticulospaw);
    if ($rowcountf > 0) {
        echo'<section class="container-fluid">   
                    <div class="row d-flex justify-content-around mt-4">
                        <div class="col-sm-12 col-lg-10 col-md-12 text-center">
                            <p class="titleliked">Haz una busqueda y sigue los articulos que te interesan</p>
                        </div>
                    </div>   
                  </section>';
        while ($resultado1 = mysqli_fetch_array($sqlarticulospaw)) {
            $articuloliked = $resultado1["iditem"];
            $sqlarticulospa1 = mysqli_query($conexion, "SELECT * FROM `easy`.`sell` WHERE `id`='$articuloliked';");
//      $can_pag = ceil($no_reg / $reg_por_pag);        

            while ($resultado = mysqli_fetch_array($sqlarticulospa1)) {
                echo' <style>
                        .cartitem{
                            width: 100%;
                            
                            object-fit: cover;
                        }

            </style>
            <div class="row mt-3">
                <div class="col-6">
                    <div class="row justi-content-around">
                        <div class="col-3">
                            <img class="cartitem" src="../modelo/' . $resultado["fotoart"] . '">
                        </div>
                        <div class="col-5">
                            <p>' . $resultado["titulo"] . '</p>
                                <p>' . $resultado["precio"] . '</p>
                                   
                        </div>
                        <div class="col-4">';
                echo"<a href='../modelo/eliminarcartitem.php?id=" . $resultado["id"] . "' class='icon-cancel m-2' id='iconyes'></a><a  data-toggle='modal' data-target='#exampleModal" . $resultado["id"] . "' href='#'  id='iconyes' class='icon-eye m-2 iconyes'></a>";
                
                echo'</div>
                    </div>
                </div>
                <div class="col-6">

                </div>
            </div>';$idvende = $resultado['idvendedor'];
                        $sqlvendedor = mysqli_query($conexion, "SELECT * FROM `easy`.`user` WHERE `id` = '$idvende';");
                        $resultadovende = mysqli_fetch_array($sqlvendedor);
                        echo'
                    <div class="modal fade" id="exampleModal' . $resultado['id'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

                                        <a class="icon-heart m-2"  href="../modelo/liked.php?id=' . $resultado['id'] . '" id="iconyes"></a><a href="articulosell.php?articulo=' . $resultado['id'] . '"   id="iconyes" class="icon-eye m-2 iconyes"></a><a  id="iconyes" class="icon-basket-1 m-2 iconyes"></a>
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

