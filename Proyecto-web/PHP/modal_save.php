<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Modal para dar alta a los cliente y guardar datos de los mismos -->
<div class="modal fade" id="modalsave" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Reservas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">


                <form method="POST" action="savereservas.php">


                    <!-- Datos del usuario -->
                    <div class="row">
                        <div class="col">
                            <label>Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="nombrecliente">
                        </div>

                        <div class="col">
                            <label>Apellido</label>
                            <input type="text" name="apellidocliente" class="form-control" placeholder="Apellido">
                        </div>

                        <div class="col">
                            <label>Identificación</label>
                            <input type="text" name="identificacion" class="form-control" placeholder="Identificación">
                        </div>

                        <div class="col">
                            <label>Teléfono</label>
                            <input type="text" class="form-control" name="telefono" placeholder="Telefono">
                        </div>

                    </div>



                    <br>
                    <!--Formulario para el correo -->

                    <div class="row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" name="gmail" class="form-control" id="inputEmail4" placeholder="Email">
                        </div>

                        <div class="form-group col-md-6">
                            <label for="inputState">Forma de pago</label>

                            <select id="menu" name="tipodepago" class="form-control" onchange="mostrarform();">
                                <option selected>Seleccionar....</option>
                                <option name="efectivo" value="efectivo">Efectivo</option>
                                <option name="credito" value="credito">Crédito</option>
                                <option name="debito" value="debito">Débito</option>
                            </select>

                        </div>

                    </div>

                    <br>
                    <!-- Formularios para el select que se muestran acorde a las opciones dadas por el select y oculta los demas -->

                    <div id="efectivo" style="display: none" class="row">

                        <div class="col">
                            <input type="text" name="propietarioefectivo" class="form-control" placeholder="Nombre">
                        </div>

                        <div class="col">
                            <input type="text" name="montoefectivo" class="form-control" placeholder="Monto">
                        </div>

                        <div class="col">

                            <?php $fcha = date("Y-m-d"); ?>

                            <input name="fechaefectivo" type="date" class="form-control" value="<?php echo $fcha; ?>">
                        </div>


                    </div>

                    <!-- Cajas para los datos segun el tipo de pago que se va a generar -->

                    <div id="credito" style="display: none" class="row">

                        <label>Crédito</label>
                        <br>
                        <div class="col">
                            <input type="text" name="propietariocredito" class="form-control" placeholder="Propietario">
                        </div>

                        <div class="col">
                            <input type="text" name="ntarjetacredito" class="form-control" placeholder="Numero de tarjeta">
                        </div>

                        <div class="col">
                            <input type="text" name="cvvcredito" class="form-control" placeholder="CVV">
                        </div>

                        <div class="col">
                            <input type="text" name="fechacadcredito" class="form-control" placeholder="Fecha de caducidad">
                        </div>

                    </div>


                    <div id="debito" style="display: none" class="row">

                        <label>Débito</label>
                        <br>
                        <div class="col">
                            <input type="text" name="propietariodebito" class="form-control" placeholder="Propietario">
                        </div>

                        <div class="col">
                            <input type="text" name="ntarjetadebito" class="form-control" placeholder="Numero de tarjeta">
                        </div>

                        <div class="col">
                            <input type="text" name="cvvdebito" class="form-control" placeholder="CVV">
                        </div>

                        <div class="col">
                            <input type="text" name="fechacaddebito" class="form-control" placeholder="Fecha de caducidad">
                        </div>

                    </div>



                    <!--  Aqui acaban los formularios para cada uno de las opciones presentadas en el select -->

                    <br>

                    <div class="row" id="<?php echo $mostrar['idHabitacion']; ?>">

                        <!-- Aqui se llevaran a cabo las consultas necesarias para mostrar datos de forma responsiva desde la base de datos -->

                            <?php
                            include("conexion.php");
                            $consulta = "SELECT * FROM habitacion";
                            $resultado = mysqli_query($enlace, $consulta);
                            ?>

                            <div class="form-group col-md-4">
                                <label for="inputState"> Tipo de Habitaciones</label>
                                <select id="MenuTipo" class="form-control" name="tipohabitacion">

                                    <option selected>Seleccionar.....</option>
                                    <option value="Habitacion Chica" name="Habitacion Chica">Habitación Chica</option>
                                    <option value="Habitacion Mediana" name="Habitacion Mediana">Habitación Mediana</option>
                                    <option value="Habitacion Grande" name="Habitacion Grande">Habitación Grande</option>
                                    <option value="Habitacion Suite" name="Habitacion Suite">Habitación Suite</option>

                                </select>
                            </div>



                            <!-- Select para las descripción y sus datos -->

                            <div class="form-group col-md-4">
                                <label for="inputState">Descripciones</label>
                                <select id="MenuHabitacion" class="form-control" name="descripcionelegida">

                                </select>


                            </div>

                            <div class="col">
                                <label>Precio</label>
                                <input id="precio" type="text" name="precio" class="form-control" placeholder="Precio" readonly>

                            </div>


                            <div class="col">
                                <label>Piso</label>
                                <input id="piso" type="text" name="piso" class="form-control" placeholder="Piso" readonly>
                            </div>



                    </div>



                    <br>
                    <!-- Botones que activan el modal por metodo post -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>


            </div>
        </div>
    </div>



    <!-- Scripts para ocultar Formulario -->


    <script type="text/javascript">
        function mostrarform(id) {

            // Guardo en una variable menu la recoleccion de datos de la clase menu que es mi select arriba
            // en una variable opcion guardo el valor de cada una de las opciones
            let menu = document.getElementById('menu');
            let opcion = menu.value;

            // Si el valor de mi opción es efectivo mostrara el formulario y ocultara los otros 2 asi con todas
            if (opcion == 'efectivo') {

                document.getElementById('efectivo').style.display = 'flex'
                document.getElementById('credito').style.display = 'none';
                document.getElementById('debito').style.display = 'none';




            } else if (opcion == 'credito') {

                document.getElementById('credito').style.display = 'flex';
                document.getElementById('efectivo').style.display = 'none';
                document.getElementById('debito').style.display = 'none';

            } else if (opcion == 'debito') {

                document.getElementById('debito').style.display = 'flex';
                document.getElementById('efectivo').style.display = 'none';
                document.getElementById('credito').style.display = 'none';

            }

        }
    </script>

    <!-- Script para traer datos de la base y hacer los relleandos de campos a traves de Java-->

    <script type="text/javascript">
        document.getElementById('MenuHabitacion').onchange = function() {

            let mOption = this.options[this.selectedIndex];
            let mData = mOption.dataset;

            let Elpiso = document.getElementById('piso');
            let Elprecio = document.getElementById('precio');

            Elpiso.value = mData.piso;
            Elprecio.value = mData.precio;

        };
    </script>



    <!-- Funcion de java para usar AJAX y rellenar automaticamente el segundo select de forma dinamica -->

    <script type="text/javascript">
        $(document).ready(function() {

            let habitacion = $('#MenuHabitacion');

            $('#MenuTipo').change(function() {

                let id_habitacion = $(this).val();

                $.ajax({

                    data: {
                        id_habitacion: id_habitacion
                    },
                    dataType: 'html',
                    type: 'POST',
                    url: 'AjaxSelectRellenado.php',
                }).done(function(data) {
                    habitacion.html(data);
                });
            });



        });
    </script>