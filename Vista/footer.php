 <style>

                .sociales{
                    font-size: 40px;
                }
                .sociales a{
                    color: #006666;
                    text-decoration: none;
                    transition: all 0.5s;
                }

                .sociales a:hover{
                    color: #00cccc;
                }
                .m{
                    color: #006666;
                    text-decoration: none;
                    transition: all 0.5s;
                }

                .m:hover{
                    color: #00cccc;
                }
                #foot1{background-color: white}
                #foot2{background-color: white}
            </style>
<section class="container-fluid mt-5" id="foooter"> 
    <div class="row d-flex justify-content-around pt-5 pb-5">
        <div id="foot1" class="col-sm-12 col-md-12 col-lg-4 p-3" style="opacity: 0;">
            <p style="font-size: 50px; color: #00cccc;">Magnus es</p>
            <p class="icon-leaf qh" id="copym">Encuentra bienes raices y alquileres</p>
            <p class="icon-leaf qh" id="copym">Compra y ventad de articulos usados y nuevos</p>
            <p class="icon-leaf qh" id="copym">Dejanos crear tu sitio web y mostrarte las posibilidades</p>
            <p class="icon-leaf qh" id="copym">Te asesoramos para que tu imagen en la web se traduzca en ventas</p>
            <hr>
            <p class="copye qp" href="">¿Como logro ser el primero en los resultados de busquedas?</p>
            <p  class="copye qp" href="">¿Como funciona el proceso de compra o venta de un articulo?</p>
            <p class="copye qp" href="">¿Como logro aparecer como socio y destacado y otros espacios?</p>
            <p class="copye qp" href="">¿Cual es la garantia de los productos que encuentro en este sitio?</p>
            <p  class="copye qp" href="">Escribenos tus preguntas en el chat, mantegamodfs  s la comunicacion</p>
        </div>
        <script>
            function footer() {
                $("#foot1").css("opacity", "0.92");
                $("#foot2").css("opacity", "0.92");
            }
            function cancelarfooter() {
                $("#foot1").css("opacity", "0");
                $("#foot2").css("opacity", "0");
            }
            
        </script>
        <style>
            #foot1{
                transition: all 0.5s;
            }
            #foot2{
                transition: all 0.5s;
            }
        </style>
        <div id="foot2" class="col-sm-12 col-md-6 col-lg-4 p-3 align-items-center text-center" style="opacity: 0">

            <p class="footertitle2"><a style="color: #00cccc">La comunicacion</a> entre tu y nosotros dirijra <a style="color: #00cccc">nuestros objetivos</a>, mantente cerca</p>
            <textarea style="border-bottom: 1px solid #999999" class="textareafooter mt-3 mb-3 p-3" placeholder="Escribenos un mensaje, mantengamos la comunicacion"></textarea><br>
            <a onclick="cancelarfooter()" class="btn btn-secondary">Atras</a>
            <a href="#" class="btn btn-primary">Envianos tu mensaje</a>
            
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-4  pt-5 align-items-center text-center">
            <img class="card-img-top" src="Vista/Img/footerimg3.jpg">
            <p class="footertitle">Solo necesitas estar listo,
                <a style="color: #00cccc">la oportunidad</a> tiene que encontrarte <a style="color: #00cccc">trabajando</a>.</p>
           
            <div class="sociales">
                <a class="icon-leaf" onclick="footer()" style="color:white; cursor:pointer"></a>
                <a class="icon-graduation-cap-1" href="#"></a>
                <a class="icon-twitter" href="#"></a>
                <a class="icon-facebook-squared" target="_blank" href="../../"></a>

            </div>
        </div>

    </div>
</section>
            <div class="modal fade" id="exampleModalidesktop" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Desktop</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center  mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Desktop">Desktop</a>
                        <a class="catestilo" href="vista/category.php?category=Servidor">Servidor</a>
                        <a class="catestilo" href="vista/category.php?category=Gamer">Gamer</a>
                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=Desktop" id="iconyes"></a>
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
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Laptop HP">Laptop HP</a>
                        <a class="catestilo" href="vista/category.php?category=Laptop Dell">Laptop Dell</a>
                        <a class="catestilo" href="vista/category.php?category=Laptop Toshiba">Laptop Toshiba</a>
                        <a class="catestilo" href="vista/category.php?category=Laptop Apple">Laptop Apple</a>
                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=Portatiles" id="iconyes"></a>
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
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Monitores">Monitores</a>
                        <a class="catestilo" href="vista/category.php?category=Procesadores">Procesadores</a>
                        <a class="catestilo" href="vista/category.php?category=Caja/Case">Caja/Case</a>
                        <a class="catestilo" href="vista/category.php?category=Memoria RAM">Memoria RAM</a>
                        <a class="catestilo" href="vista/category.php?category=Targeta de video">Targeta de video</a>
                        <a class="catestilo" href="vista/category.php?category=Discos Duros">Discos Duros</a>
                        <a class="catestilo" href="vista/category.php?category=Targeta madre">Targeta madre</a>
                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=ArmatuPC" id="iconyes"></a>
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
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Ipad">Ipad</a>
                        <a class="catestilo" href="vista/category.php?category=Tablets">Tablets</a>
                        <a class="catestilo" href="vista/category.php?category=Iphone">Iphone</a>
                        <a class="catestilo" href="vista/category.php?category=Nokia">Nokia</a>
                        <a class="catestilo" href="vista/category.php?category=Samnsung">Samnsung</a>
                        <a class="catestilo" href="vista/category.php?category=Otros Celulares">Otros Celulares</a>
                        <a class="catestilo" href="vista/category.php?category=Accesorio para celulares">Accesorio para celulares</a>

                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=Tablets/celulares" id="iconyes"></a>
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
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Impresora EPSON">Impresora EPSON</a>
                        <a class="catestilo" href="vista/category.php?category=Impresora HP">Impresora HP</a>
                        <a class="catestilo" href="vista/category.php?category=Impresora Brother">Impresora Brother</a>
                        <a class="catestilo" href="vista/category.php?category=Impresora Canon">Impresora Canon</a>
                        <a class="catestilo" href="vista/category.php?category=Impresora Xerox">Impresora Xerox</a>
                        <a class="catestilo" href="vista/category.php?category=Impresora Samsung">Impresora Samsung</a>
                        <a class="catestilo" href="vista/category.php?category=Cartuchos originales">Cartuchos originales</a>
                        <a class="catestilo" href="vista/category.php?category=Cartuchos genericos">Cartuchos genericos</a>
                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=impresoras" id="iconyes"></a>
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
            <form id="newuser" action="" method="post" onsubmit="return validar()" class="formlogin" enctype="multipart/form-data">
                <div class="modal-body">

                    <div class="form-group text-center mt-4 ">
                        <a class="catestilo" href="vista/category.php?category=Parlantes">Parlantes</a>
                        <a class="catestilo" href="vista/category.php?category=Teclado">Teclado</a>
                        <a class="catestilo" href="vista/category.php?category=Mouse">Mouse</a>
                        <a class="catestilo" href="vista/category.php?category=Headsets/Auriculares">Headsets/Auriculares</a>
                        <a class="catestilo" href="vista/category.php?category=Baterias">Baterias</a>
                        <a class="catestilo" href="vista/category.php?category=Fundas, maletines y estuches">Fundas, maletines y estuches</a>
                        <a class="catestilo" href="vista/category.php?category=Cargadores">Cargadores</a>
                        <a class="catestilo" href="vista/category.php?category=Memorias">Memorias</a>
                    </div>
                    <a class="icon-tv m-2" href="vista/category.php?category=Accesorios" id="iconyes"></a>
                </div>
            </form>

        </div>
    </div>
</div>
