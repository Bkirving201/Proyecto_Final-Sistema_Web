<!-- Modal Editar los datos dentro del registro de habitaciones -->


<div class="modal fade" id="editmodal<?php echo $mostrar['idHabitacion']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">EDITAR</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- Contenido del cuerpo del Modal, se haran los registros con datos traidos dela base -->


                <form method="post" action="EditHabitaciones.php">
                    <input type="hidden" name="id" value="<?php echo $mostrar['idHabitacion']; ?>">

                    <div class="row">

                        <div class="col">
                            <label for="exampleInputEmail1">Nombre de la Habitación</label>
                            <input type="text" class="form-control" name="nombre" value="<?php echo $mostrar['NombreHab']; ?>" required="true">
                        </div>

                        <div class="col">
                            <label for="exampleInputEmail1">Precio</label>
                            <input type="text" class="form-control" name="precio" value="<?php echo $mostrar['Precio']; ?>" required="true">
                        </div>
                    </div>

                    <br>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Descripción</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="descripcion" value="<?php echo $mostrar['Descripcion']; ?>" required="true">
                    </div>

                    <br>

                    <div class="row">
                        <div class="col">
                            <label for="exampleInputEmail1">Estado</label>
                            <input type="text" class="form-control" name="estado" value="<?php echo $mostrar['Estado']; ?>" required="true" readonly>
                        </div>
                        <div class="col">
                            <label for="exampleInputEmail1">Piso</label>
                            <input type="text" class="form-control" name="piso" value="<?php echo $mostrar['Piso']; ?>" required="true" readonly>
                        </div>
                    </div>
                    <br>

                    <!-- Botones para el modal -->

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