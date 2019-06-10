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
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div>

                    <form  action="../modelo/agregararticulosdetienda.php" method="post"  enctype="multipart/form-data">
                        <div class="text-center justify-content-around p-5"  id="articuloform">
                            <p class="titupubli">¡Publica!</p>
                            <input class="inputl col-6"  type="text"placeholder="Titulo de la publicacion"  name="titulo" id="titulo" required><br>
                            <input class="inputl" type="text" onkeyup="format(this)" onchange="format(this)" placeholder="Precio en colones" name="precio"required>
                            <select class="inputl rale" required  name="categoria">
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
                                <option value="Impresora Canon">Impresora Canon</option>
                                <option value="Impresora Xerox">Impresora Xerox</option>
                                <option  value="Impresora Samsung">Impresora Samsung</option>
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
                            </select>
                            <input class="inputl" type="number" placeholder="Calidad 10/10" name="estado" max="10" min="1" required>
                            <input class="inputl" name="existencias" type="number" placeholder="Existencias"> 
                            <input class="inputl" type="text" placeholder="Zona de entrega" name="zona"required><br>
                            <textarea id="textareapublicar" class="inputl col-sm-12 col-lg-6 col-md-12 text-left p-5" style="font-size: 15px;" placeholder="Descripcion" name="descripcion" required></textarea><br>                       

                            <p class="titupubli mt-5">¿Como haras las entrega?</p>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="correo" value="correo" name="envio" checked><a style="color: #cc6600 " class="inputlr">   Envio por correo</a> </div>
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="reunion" value="reunion" name="envio"><a  style="color: #999900" class="inputlr">   Reunion en un punto cercano</a> </div>
                                    <div  class="col-sm-12 col-lg-4 col-md-6 "><input class="inputr" type="radio" id="casa" value="casa" name="envio"><a style="color: #339900" class="inputlr">   Lo entregaras en la casa del cliente</a> </div>
                                </div>
                            </div>
                            <p class="titupubli mt-5">Tipo de publicacion</p>
                            <div class="container-fluid">
                                <div class="row justify-content-around">
                                    <div class="col-9">
                                        <div class="row">
                                            <div  class="col-sm-12 col-lg-3 col-md-6"><input class="inputr" type="radio" id="donativo" value="donativo" name="tipopublicacion" checked><a style="color: #999900 " class="inputlr">   Donativo</a> </div>
                                            <div  class="col-sm-12 col-lg-3 col-md-6"><input class="inputr" type="radio" id="gratis" value="gratis" name="tipopublicacion" ><a style="color: #999900 " class="inputlr">   Gratis</a> </div>
                                            <div  class="col-sm-12 col-lg-3 col-md-6"><input class="inputr" type="radio" id="nuevo" value="nuevo" name="calidad" checked><a style="color: #660066" class="inputlr">   Articulo nuevo</a> </div>
                                            <div  class="col-sm-12 col-lg-3 col-md-6"><input class="inputr" type="radio" id="usado" value="usado" name="calidad" ><a style="color: #660066" class="inputlr">   Articulo usado</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <p class="titupubli mt-5"> Fotos </p> <br>
                            <input class="inputlf" type="file" id="fotoart" name="fotoart" required>
                            <input class="inputlf" type="file" id="fotoart" name="fotoart2" >
                            <input class="inputlf" type="file" id="fotoart" name="fotoart3" >
                            <input class="inputlf" type="file" id="fotoart" name="fotoart4" ><br>
                            <div class="col-12 align-items-center text-center">
                                <input class="mt-5 publica" type="submit" value="Publicar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div  class="col-12">
                <div class="text-center justify-content-around p-5">
                    <p class="titupubli">¡Publica!</p>
                    <p style="font-size: 20px; margin: 15px;">Gracias por elejir nuestra plataforma, si tienes alguna duda escribenos al chat, o dejanos un mensaje en la pagina de facebook Magnus. Gracias por elejir nuestra plataforma, si tienes alguna duda escribenos al chat, o dejanos un mensaje en la pagina de facebook Magnus.</p>
                    <p class="icon-camera" style="color: #cc0000; display: inline-block;font-size: 14px;  margin: 5px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-camera" style=" color: #d48817; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-camera" style=" color: #999900; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-camera" style=" color: #66cc00; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>
                    <p class="icon-camera" style=" color: #009999; display: inline-block;font-size: 14px;  margin: 10px; width: 200px;">1. Utilizar fotos reales del producto q quieres vender, genera confianza en tus futuros clientes, te recomendamos mostrarlo en la foto con detalle.</p>              
                </div>              
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-6 col-md-12 text-center justify-content-around p-5" id="pagos">
                <div id="tedonacion">
                    <p class="tedonatext" style="color: #cccc00; font-size: 30px;">
                        Tendras prioridad en las busquedas, las personas que no estan registradas podran ver tu anuncio,
                        nos ayudas a mantener el sitio, y hacerlo crecer para el beneficio de todos. Gracias por tu apoyo :D                         
                    </p>
                    <p style="color: #d48817; font-size: 30px;">Haz una transferencia a alguna de estas cuentas bancarias, Al elejir la opcion "donativo" se generará 
                        un codigo que tienes que poner como descripcion en la transferencia.</p>
                </div>      
            </div>
            <div class="col-sm-12 col-lg-6 col-md-12 text-center justify-content-around p-5"  id="formaspago">
                <div class="bancos">
                    <img src="img/paypal.png" width="125px">
                </div>
                <div class="bancos">
                    <img src="img/bcr.jpe" width="100px">
                    <p class="titupubli">Cuenta: 155815224930</p>
                </div>
                <div class="bancos">
                    <img src="img/bac_sj.png" width="100px">
                    <p class="titupubli">Cuenta: 155815224930</p>
                </div>
                <div class="bancos">
                    <img src="img/banconacional.png" width="100px">
                    <p class="titupubli">Cuenta: 155815224930</p>
                </div>
            </div> 
        </div>
    </section>
</body>