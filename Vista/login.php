<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title " id="exampleModalLabel">Bienvenido a Easy :D</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="modelo/login.php" method="POST" enctype="application/x-www-form-urlencoded">
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Correo electronico</label>
                        <input type="email" id="email" name="email" class="form-control rale" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="form-control-label">Contraseña</label>
                        <input type="password" id="pass" name="pass" class="form-control rale" id="message-text">
                    </div>
                    <button type="button" class="btn btn-secondary rale" data-dismiss="modal">Cerrar</button>
                    <input type="submit" class="btn btn-primary rale" value="Iniciar sesion">
                </form>
            </div>
        </div>
    </div>
</div>