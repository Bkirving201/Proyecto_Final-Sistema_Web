<!-- Modal Para borrar datos  -->
<div class="modal fade" id="deletetemodal<?php echo $mostrar['idClientes']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="deteleclientes.php" method="post">
                <input type="hidden" name="id" value="<?php echo $mostrar['idClientes']; ?>">
                <div class="modal-body">

                    <label for="exampleInputEmail1">Desea eliminar a </label>
                    <?php echo $mostrar['Nombre']; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Cerrar </button>
                    <button type="submit" class="btn btn-primary"> Borrar </button>
                </div>
            </form>
        </div>
    </div>
</div>