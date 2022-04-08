<!-- Modal actualizar datos desde formulario -->
<div class="modal fade" id="updatemodal<?php echo $mostrar['idClientes']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modificar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Contenido del cuerpo del Modal, se haran los registros con datos traidos dela base -->


                <form method="post" action="updateclientes.php">
                    <input type="hidden" name="id" value="<?php echo $mostrar['idClientes']; ?>">

                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1">Nombre</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $mostrar['Nombre']; ?>" required="true">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Apellido</label>
                            <input type="text" class="form-control" name="apellidos" value="<?php echo $mostrar['Apellidos']; ?>" required="true">
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" value="<?php echo $mostrar['Correo']; ?>" required="true">
                        <small id="emailHelp" class="form-text text-muted">Recuerda no proporcionar tu correo a nadie </small>
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1">Teléfono</label>
                            <input type="text" class="form-control" placeholder="Celular" name="telefono" value="<?php echo $mostrar['Telefono']; ?>" required="true">
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Identificación</label>
                            <input type="text" class="form-control" name="identificacion" value="<?php echo $mostrar['Identificacion']; ?>" required="true">
                        </div>
                    </div>
                    <br>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                    </div>
                </form>
                <!-- Aqui acaba el contenido correspondiente al modal -->

            </div>
        </div>
    </div>
</div>