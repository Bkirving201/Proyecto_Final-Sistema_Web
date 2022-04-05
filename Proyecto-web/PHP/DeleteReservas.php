<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


<!-- Modal que mostrara los datos de la reserva a eliminar  -->
<div class="modal fade" id="deleteReserva<?php echo $MostrarReservas['idReserva']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"> ELIMINAR RESERVAS </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="SQL_DeleteReservas.php" method="post">
                <input type="hidden" name="idReserva" value="<?php echo $MostrarReservas['idReserva']; ?>">
                <input type="hidden" name="idClientes" value="<?php echo $MostrarReservas['idClientes']; ?>">
                <input type="hidden" name="idPago" value="<?php echo $MostrarReservas['idPago']; ?>">
                <input type="hidden" name="idHabitacion" value="<?php echo $MostrarReservas['idHabitacion']; ?>">
                <div class="modal-body">

                    <label> ¿Desea eliminar a
                        <?php echo $MostrarReservas['Nombre']; ?>
                        <?php echo $MostrarReservas['Apellidos']; ?> ? </label>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
            </form>

        </div>
    </div>
</div>