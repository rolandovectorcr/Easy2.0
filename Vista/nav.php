<nav class="navbar sticky-top navbar-toggleable-md navbar-light bg-faded" style="opacity: 0.9">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="Vista/Img/footerimg3.jpg" width="45" height="45" class="d-inline-block align-top" style="border-radius: 50%" alt="">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" style="color: white" href="#">MAGNUS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-emo-thumbsup" id="navw" data-toggle="modal" data-target="#exampleModal" href="#">Inicia sesion</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-user" id="navw" href="vista/newuser.php" >Registrate</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-graduation-cap-1" id="navw" href="#">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link icon-comment" id="navw" href="#">Como funciona</a>
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
        </ul>
        <form action="vista/busqueda.php" method="GET" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2 rale noborder" style="font-family: raleway;" type="text" name="titulobusq" placeholder="Busca articulos aqui">
            <button id="encontrar" class="btn btn-outline-success my-2 my-sm-0 icon-search noborder" type="submit">Encontrar</button>
        </form>
    </div>
</nav>