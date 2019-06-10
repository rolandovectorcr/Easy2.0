<nav class="navbar sticky-top navbar-inverse  navbar-toggleable-md navbar-light bg-faded" style="opacity: 0.9">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <?php
    $id = $_SESSION['id'];
    require '../modelo/conexion.php';
    $sqlventas = mysqli_query($conexion, "SELECT * FROM `easy`.`cart`;");
    $cart = 0;
    while ($resultadol = mysqli_fetch_array($sqlventas)) {
        if ($resultadol['idbuyer'] == $id) {
            $cart = $cart + 1;
        }
    }
    ?>
    <?php
    if (@!$_SESSION['nombre']) {
        #si no ha iniciado nos redireccione a index.php
        echo '<img src="Img/footerimg3.jpg" width="45" height="45" class="d-inline-block align-top" style="border-radius: 50%;object-fit: cover;" alt="">';
    } else {
        echo'<img src="../modelo/';
        echo $_SESSION['foto'];
        echo'" width="45" height="45" class="d-inline-block align-top" style="border-radius: 50%;object-fit: cover;" alt="">';
    }
    ?>
    <style>
        .numbar{
            color: #ffffff;

            transition: all 0.5s;
            text-decoration: none;
            font-size: 28px;
        }
        .numbar:hover{
            color: #cccccc;
            text-decoration: none;
        }


    </style>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto  ">
            <?php
            if (@!$_SESSION['nombre']) {
                #si no ha iniciado nos redireccione a index.php
                echo '<li class="nav-item">
                <a class="nav-link " id="navw" href="../" >MAGNUS</a>
            </li>
                    <li class="nav-item">
                <a class="nav-link icon-emo-thumbsup" id="navw" data-toggle="modal" data-target="#exampleModal" href="#">Inicia sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-user" id="navw" href="newuser.php" >Registrate</a>
            </li>
           
            <li class="nav-item">
                <a class="nav-link icon-comment" id="navw" href="#">Como funciona</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link icon-graduation-cap-1" id="navw" href="#">Blog</a>
            </li>
            <li class="nav-item dropdown">
                        <a id="navw" class="icon-tv nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">                          
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModalidesktop">Desktop</a>    
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliportatiles">Notebooks portatiles</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliarmapc">Arma tu PC</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModalicelulares">Tablets y celulares</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliimpresoras">Impresoras</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliaccesorios">Accesorios</a>
                        </div>
                    </li>
            ';
            } else {
                echo '<li class="nav-item dropdown">
                        <a id="navw"  class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ';
                echo $_SESSION['nombre'];
                echo'
                        </a>
                        <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item ar icon-user-1" href="perfil.php">Dashboard</a>
                            
                            
                            <a class="dropdown-item ar icon-pencil" style="cursor:pointer" href="#" data-toggle="modal" data-target="#exampleModali"  >Actualizar informacion</a>
                            <a class="dropdown-item ar icon-cloud-moon" href="../modelo/desconectar.php">Cerrar sesion</a>
                            <a class="dropdown-item ar icon-comment" href="#">Ayuda</a>
                            <a class="dropdown-item ar icon-handshake-o" href="#">Terminos de uso</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navw" class="icon-tv nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorias
                        </a>
                        <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">                          
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModalidesktop">Desktop</a>    
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliportatiles">Notebooks portatiles</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliarmapc">Arma tu PC</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModalicelulares">Tablets y celulares</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliimpresoras">Impresoras</a>
                            <a class="dropdown-item ar icon-search" href="newarticle2.php" href="#" data-toggle="modal" data-target="#exampleModaliaccesorios">Accesorios</a>
                        </div>
                    </li>';
            }
            ?>
            <?php
            if (@!$_SESSION['nombre']) {
                #si no ha iniciado nos redireccione a index.php
                echo '<li class="nav-item dropdown">
                                
                              </li>';
            } else {
                echo '<li class="nav-item dropdown">
                        <a id="navw" class="icon-note nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Publicar
                        </a>
                        <div class="dropdown-menu arq" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item ar icon-star-1"  href="newarticle.php" >Publicacion patrocinada</a>
                            <a class="dropdown-item ar icon-doc" href="newarticle2.php">Publicacion gratis</a>                        
                        </div>
                    </li>
                    <li class="nav-item">
                <a class="nav-link icon-graduation-cap-1" id="navw" href="#">Blog</a>
            </li>';
            }
            ?>



        </ul>
        <form action="busqueda.php" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 noborder rale" type="text" name="titulobusq" placeholder="Busca articulos aqui">
            <button id="encontrar" class="btn btn-outline-success my-2 my-sm-0 icon-search noborder" type="submit">Encontrar</button>
            <a class="nav-link icon-leaf" id="navw" href="user.php"></a>
            <?php
            $id = $_SESSION['id'];
            require '../modelo/conexion.php';
            $sqlliked = mysqli_query($conexion, "SELECT * FROM `easy`.`liked`;");
            $sqlliked2 = mysqli_query($conexion, "SELECT * FROM `easy`.`likedsell`;");
            $liked = 0;
            $liked2 = 0;
            while ($resultadol = mysqli_fetch_array($sqlliked)) {
                if ($resultadol['likeid'] == $id) {
                    $liked = $liked + 1;
                }
            }
            while ($resultadol2 = mysqli_fetch_array($sqlliked2)) {
                if ($resultadol2['likeid'] == $id) {
                    $liked2 = $liked2 + 1;
                }
            }
            $likede = $liked + $liked2;
            ?>
            <?php
            if (@!$_SESSION['nombre']) {
                #si no ha iniciado nos redireccione a index.php
                echo '';
            } else {
                echo '<a class="numbar" href="perfil.php#lik">' . $likede . '</a><a class="nav-link icon-heart" id="navw" href="perfil.php#lik"></a>
            <a class="numbar" href="cart.php">' . $cart . '</a><a class="nav-link icon-basket-1" id="navw" href="cart.php"></a>';
            }
            ?>

        </form>
    </div>
</nav>