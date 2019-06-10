<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Css/boot/bootstrap.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>    
    <link rel="stylesheet" href="Css/Estilo.css">
    <link rel="stylesheet" href="Css/fontello.css">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
</head>
<body>
    <section class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-6 new flex-wrap d-flex justify-content-around align-items-center text-center">
                <form id="newuser" action="../Modelo/nuevousuario.php" method="post"class="formlogin" enctype="multipart/form-data">
                    <p class="titupubli">Crea una cuenta y empieza tus negocios, tu palabra vale</p>
                    <div class="contenedor-inputs">
                        <input class="inputl" type="text" id="nombre" name="nombre" placeholder="Nombre" required>  
                        <input class="inputl" type="text" id="apellido" name="apellido" placeholder="Apellidos" required>
                        <input class="inputl" type="email" id="correo" name="correo" placeholder="E-mail" required>
                        <input class="inputl"  type="text" id="telefononw" name="telefono" placeholder="Telefono" required>
                        <input class="inputl" type="password" id="clave" name="clave" placeholder="&#128272; Crea una contraseña" required>
                        <input class="inputl" type="password" id="clave2" name="clave2" placeholder="&#128272; Repite la contraseña" required>
                        <p class="titupubli">Elije una imagen de perfil</p>
                        <input class="inputfn"  type="file" id="foto" name="foto" required>
                        <div class="mt-5">
                            <p class="textlogin">Al dar click en "Registrar", aceptas los <a href="vistas/tns.php" target="_blank" style="color: #009999;text-decoration: none;">terminos y condiciones</a> del uso de este servicio.
                                Tu informacion es privada y solo será usada para contactarle.</p> 
                            <a class="btn btn-secondary rale" id="cancelar" href=" ../">Cancelar</a>
                            <input type="submit" class="btn btn-primary rale" value="Registrar" >    
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 newinfo">

            </div>
        </div>

    </section>
</body>