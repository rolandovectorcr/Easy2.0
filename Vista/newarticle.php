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
    <script src="controladores/generales.js"></script>
    <script src="./controladores/login.js"></script>
    <script src="./controladores/sweetalert.min.js"></script>
</head> 
<body>
    <?php include './navuser.php';?>
    <section class="container">
        <div class="row">
            <form  action="../modelo/agregararticulo.php" method="post"  enctype="multipart/form-data">
                <div class="col-12 p-5">

                    <p class="titupubli text-center">¡Publica!</p>
                    <div class="row">
                        <div class="col-6  justify-content-around">
                            <input class="inputl col-11"  type="text"placeholder="Titulo de la publicacion"  name="titulo" id="titulo" required><br>
                            <input class="inputl  col-5" type="text" onkeyup="format(this)" onchange="format(this)" placeholder="Precio en colones" name="precio"required>
                            <select class="inputl col-5" required  name="categoria">
                                <option value="Desktop">Desktop</option>
                                <option value="Gamer">Gamer</option>
                                <option value="Servidor">Servidor</option>        
                                <option value="Laptop HP">Laptop HP</option>
                                <option value="Laptop Dell">Laptop Dell</option>
                                <option value="Laptop Toshiba">Laptop Toshiba</option>
                                <option value="Laptop Apple">Laptop Apple</option>
                                <option value="Monitores">Monitores</option>
                                <option value="Procesadores">Procesadores</option>
                                <option value="Caja/Case">Caja/Case</option>
                                <option value="Memoria RAM">Memoria RAM</option>
                                <option value="Targeta de video">Targeta de video</option>
                                <option value="Discos Duros">Discos Duros</option>
                                <option value="Targeta madre">Targeta madre</option>
                                <option value="Parlantes">Parlantes</option>
                                <option value="Ipad">Ipad</option>
                                <option value="Tablets">Tablets</option>
                                <option value="Iphone">Iphone</option>
                                <option value="Nokia">Nokia</option>
                                <option value="Samsung">Samsung</option>
                                <option value="Otros Celulares">Otros Celulares</option>
                                <option value="Accesorio para celulares">Accesorio para celulares</option>
                                <option value="Impresora EPSON">Impresora EPSON</option>  
                                <option value="Impresora HP">Impresora HP</option>
                                <option value="Impresora Brother">Impresora Brother</option>
                                <option value="Impresora Brother">Impresora Canon</option>
                                <option value="Impresora Brother">Impresora Xerox</option>
                                <option  value="Impresora Brother">Impresora Samsung</option>
                                <option value="Cartuchos originales">Cartuchos originales</option>
                                <option value="Cartuchos genericos">Cartuchos genericos</option>
                                <option value="Parlantes">Parlantes</option>
                                <option value="Teclado">Teclado</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headsets/Auriculares">Headsets/Auriculares</option>
                                <option value="Baterias">Baterias</option>
                                <option value="Fundas, maletines y estuches">Fundas, maletines y estuches</option>
                                <option value="Cargadores">Cargadores</option>
                                <option value="Memorias">Memorias USB</option>
                            </select><br>
                            <input class="inputl  col-5" type="number" placeholder="Calidad 10/10" name="estado" max="10" min="1" required>              
                            <input class="inputl  col-5" type="text" placeholder="Zona de entrega" name="zona"required><br>
                            <textarea id="textareapublicar" class="inputl col-sm-12 col-lg-12 col-md-12 text-left p-5" style="font-size: 15px;" placeholder="Descripcion" name="descripcion" required></textarea><br>                       

                        </div>
                        <div class="col-6">
                            <img style="border-radius: 50%;width: 75px;height: 75px;margin: 10px;" src="img/footerimg3.jpg"><a style="font-size: 30px; color: #009999;">Hola Bienvenidos a mi sueño</a>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                            <p class="icon-lightbulb" style=" color: #dada00;">lafk ñsdñl kasdñfkjsñlkla sdkla sdkf lañsdjlañs d</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6  justify-content-around">
                            <p class="titupubli mt-5">¿Como haras las entrega?</p>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="correo" value="correo" name="envio" checked><a style="color: #cc6600 " class="inputlr">   Envio por correo</a> </div>
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="reunion" value="reunion" name="envio"><a  style="color: #999900" class="inputlr">   Reunion en un punto cercano</a> </div>
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="casa" value="casa" name="envio"><a style="color: #339900" class="inputlr">   Lo entregaras en la casa del cliente</a> </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6  justify-content-around">
                            <p class="titupubli mt-5">¿Cual es la calidad del producto?</p>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div class="col-9">
                                        <div class="row justify-content-around">
                                            <div  class="col-sm-12 col-lg-5 col-md-6"><input class="inputr" type="radio" id="nuevo" value="nuevo" name="calidad" checked><a style="color: #660066" class="inputlr">   Articulo nuevo</a> </div>
                                            <div  class="col-sm-12 col-lg-5 col-md-6"><input class="inputr" type="radio" id="usado" value="usado" name="calidad" ><a style="color: #660066" class="inputlr">   Articulo usado</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-6  justify-content-around">
                            <p class="titupubli mt-5"> Fotos </p> <br>
                            1<input class="inputlf" type="file" id="fotoart" name="fotoart" required>
                            2<input class="inputlf" type="file" id="fotoart" name="fotoart2" >
                            3<input class="inputlf" type="file" id="fotoart" name="fotoart3" >
                            4<input class="inputlf" type="file" id="fotoart" name="fotoart4" >
                        </div>
                        <style>
                            .punn{
                                background-image: url('img/banner1.jpg');
                                
                                object-fit: cover;
                                background-size: cover;
                            }
                            .pu{
                                color: white
                            }
                            .pu2{
                                color: #cccc00;
                                font-size: 22px;
                            }
                        </style>
                        <div class="col-6 align-items-center text-center punn p-3">
                            <strong><p class="icon-star pu2">Hola! Bienvenidos a mi sueño de niño</p></strong>
                            <strong><p class="pu">Este es un espacio que hay que respetar, y trabajar juntos por haacerls mejor
                                    encuentra mas detalles en el blog que tengo preparado</p></strong>
                            
                            <button class=" publica text-center" data-toggle="modal" data-target=".bd-example-modal-lg">Cuentas bancarias</button>
                            <input class="publica" type="submit" value="Publicar">
                        </div>
                    </div>
            </form>
        </div>
        <div class="row">
            <div  class="col-12">
                <div class="text-center justify-content-around p-5">
                    <p class="titupubli">¡Publica!</p>
                    <p style="font-size: 20px; margin: 15px;">Gracias por elejir nuestra plataforma, si tienes alguna duda escribenos al chat, o dejanos un mensaje en la pagina de facebook Magnus. Gracias por elejir nuestra plataforma, si tienes alguna duda escribenos al chat, o dejanos un mensaje en la pagina de facebook Magnus.</p>
                    <p class="icon-star" style="color: #cc0000; display: inline-block;font-size: 14px;  margin: 5px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-star" style=" color: #d48817; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-star" style=" color: #999900; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-star" style=" color: #66cc00; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
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

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content p-5 text-center">
        <p style="font-size: 32px;color: #009999">Gracias por aportar a nuestro proyecto</p>
        <p>Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto
         Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto Gracias por aportar a nuestro proyecto</p>
        <div class="row">
            <div class="col-3">
                <img style="height: 50px;object-fit: cover" class="col-12" src="Img/bac_sj.png">
                <p style="color: #cccc00">Cuenta cliente
                    <a style="color: #878787">23411234123</a></p>
                <p style="color: #cccc00">Cuenta corriente
                <a style="color: #878787">11000023411234123</a></p>
            </div> 
            <div class="col-3">
                <img style="height: 50px;object-fit: cover" class="col-12" src="Img/banconacional.png">
                <p style="color: #cccc00">Cuenta cliente
                    <a style="color: #878787">23411234123</a></p>
                <p style="color: #cccc00">Cuenta corriente
                <a style="color: #878787">11000023411234123</a></p>
            </div> 
            <div class="col-3">
                <img style="height: 50px;object-fit: cover" class="col-12" src="Img/bcr.jpe">
                <p style="color: #cccc00">Cuenta cliente
                    <a style="color: #878787">23411234123</a></p>
                <p style="color: #cccc00">Cuenta corriente
                <a style="color: #878787">11000023411234123</a></p>
            </div> 
            <div class="col-3">
                <img style="height: 50px;object-fit: cover" class="col-12" src="Img/paypal.png">
                <p style="color: #cccc00">Cuenta cliente
                    <a style="color: #878787">23411234123</a></p>
                <p style="color: #cccc00">Cuenta corriente
                <a style="color: #878787">11000023411234123</a></p>
            </div> 
        </div>
    </div>
  </div>
</div>

</body>