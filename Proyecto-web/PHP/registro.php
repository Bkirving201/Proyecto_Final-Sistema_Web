<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  <!--Conexion-bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  <!--Conexion-bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/styles-registro.css"> <!-- Conexion HTML con CSS -->
	<link rel="icon" href="../img/img2.png"> <!-- Iconco -->
	<title>Sistema hotelero</title>
</head>

<body>
	<div id="general">
		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img1">  <!-- logo	del sistema -->
				<a href="index.php">
					<button class="animacion-btn" id="btn">Inicio</button> <!-- Btn-lateral-inicio-->
				</a>
                <a href="habitaciones.php">
					<button class="animacion-btn" id="btn">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>
				<a href="datos-registrados.php">
					<button class="animacion-btn" id="btn">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>

                <a href="registro.php?pagina=1">
                    <button class="animacion-btn" id="btn" > Registro </button><!-- Btn-lateral-Registro-->
                </a>

			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<!-- aqui comienza La estructura del cuerpo -->
		<div id="cuerpo">
			<div id="contenido-cuerpo"> <!--Cuadro branco -->

                <h2 style="text-align: center;"> Habitaciones </h2>

                <?php
                if(!$_GET){
                    header('location:registro.php?pagina=1');
                }
                ?>

                <!-- Tabla para mostrar los datos en referencia a la base y las habitaciones -->

                        <table class="table table-hover" id="alineacion-tabla">
                            <thead>
                            <tr class="tittletables">
                                <th class="tamañocelda" scope="col">Habitación</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Piso</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                            </thead>

                            <tbody>
                <!-- Consulta de los datos atraves de php -->

                            <?php $cont = include ("conexion.php");
                            $consulta="SELECT * FROM habitacion";
                            $resultado = mysqli_query($enlace,$consulta);   //Primera sentencia para definir la parte inferior


                            $articulos_por_pagina=3;    //Defino que cantidad de resultados quiero ver
                            $articulos_totales=mysqli_num_rows($resultado); // Estoy realizando una cuenta de todas las filas que trae la tabla
                            $paginas=$articulos_totales/3; // realizo el calculo de las paginas por medio de los datos entre el numero de articulos por pagina
                            $paginas=ceil($paginas); // redondeo hacia arriba en caso de que haya decimal

                            $contador=($_GET['pagina']-1)*$articulos_por_pagina;


                            $consulta_1="SELECT * FROM habitacion LIMIT $contador,$articulos_por_pagina"; // realizo una
                            //segunda consulta para definir los datos a mostra incluyengo un limite con los datos previos

                            $resultado_1=mysqli_query($enlace,$consulta_1);



                            while ($mostrar=mysqli_fetch_array($resultado_1)){

                            ?>

                                <tr class="<?php echo ($mostrar['Estado']=="Ocupada")?'disponibilidad':'sin-color' ?>">

                                    <td > <?php echo $mostrar['NombreHab'] ?> </td>
                                    <td > <?php echo $mostrar['Descripcion'] ?> </td>
                                    <td >$ <?php echo $mostrar['Precio'] ?> </td>
                                    <td > <?php echo $mostrar['Piso'] ?> </td>
                                    <td > <?php echo $mostrar['Estado'] ?> </td>
                                    <td>

                                        <button type="button" class="buttonedit" data-bs-toggle="modal" data-bs-target="#editmodal<?php echo $mostrar['idHabitacion'];?>">
                                            Editar
                                        </button>

                                    </td>

                                </tr>

                            <?php
                                include("Modal_Registro.php");
                            }
                            ?>
                            </tbody>
                        </table>

                <!-- Final de la tabla para mostrar los datos -->




                        <!-- Aqui comienza la paginación para la tabla -->

                        <nav class="alineacion" aria-label="Page navigation example">
                            <ul class="pagination" >


                                <li class="page-item <?php echo $_GET['pagina']<= 1 ? 'disabled':'' ?>">

                                    <a class="page-link"
                                       href="registro.php?pagina=<?php echo $_GET['pagina']-1 ?>" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only"></span>
                                    </a>

                                </li>


                                <!-- For para mostrar el numero de paginas necesarias -->

                                <?php for($i=0;$i<$paginas;$i++): ?>

                                <li class="page-item <?php echo $_GET['pagina']==$i+1 ?'active': '' ?>">
                                    <a class="page-link" href="registro.php?pagina=<?php echo $i+1 ?>">
                                        <?php echo $i+1 ?>
                                    </a>
                                </li>

                                <?php endfor; ?>


                                <li class="page-item <?php echo $_GET['pagina']>=$paginas ? 'disabled':'' ?> ">

                                    <a class="page-link"
                                       href="registro.php?pagina=<?php echo $_GET['pagina']+1 ?>" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only"></span>
                                    </a>

                                </li>

                            </ul>

                        </nav>


                <!-- aqui acaba la paginacion de la pagina para mostrar los datos por cantidad -->



                <!-- Boton que inica el modal para guardar datos -->
                
                <h1 style="margin-left: 22px;"> Reservas <button type="button" class="buttonedit" data-bs-toggle="modal" data-bs-target="#modalsave">
                        Guardar
                    </button></h1>

                <!-- Aqui comienza la tabla de reservas para con los registros -->

                <table class="table table-hover" id="alineacion-tabla">
                    <thead>
                    <tr class="tittletables">

                        <th scope="col">Nombre del cliente</th>
                        <th scope="col">Num. hab</th>
                        <th scope="col">Tipo Hab.</th>
                        <th scope="col">Piso</th>
                        <th scope="col">Forma de pago</th>
                        <th scope="col">Fecha de reserva</th>
                        <th scope="col">Acciones</th>

                    </tr>
                    </thead>
                    <!-- Consultas para los datos de reservas -->

                    <?php
                    include ("conexion.php");

                    $ConsultaParaReservas = "SELECT 
                                            clientes.Nombre,clientes.Apellidos,
                                            habitacion.idHabitacion,habitacion.Piso,habitacion.NombreHab,
                                            formapago.NombrePago,
                                            reservas.FechadeAlta,reservas.idReserva
                                            FROM reservas 
                                            INNER JOIN clientes ON clientes.idClientes = reservas.clientes_idClientes
                                            INNER JOIN habitacion ON reservas.habitacion_idHabitacion = habitacion.idHabitacion
                                            INNER JOIN formapago ON formapago.idPago = reservas.formapago_idPago";

                    $ResultadosParaReservas = mysqli_query($enlace,$ConsultaParaReservas);

                    while ($MostrarReservas = mysqli_fetch_assoc($ResultadosParaReservas)) {

                    ?>

                    <!-- Debibo a la repetición de los WHILE y los datos Erroneos mostrados opto por hacer cada
                    WHILE dentro de su casilla de forma individual -->

                    <tbody>

                        <tr>

                            <td> <?php echo $MostrarReservas['Nombre']; ?> <?php echo $MostrarReservas['Apellidos']; ?> </td>
                            <td> <?php echo $MostrarReservas['idHabitacion']; ?>  </td>
                            <td> <?php echo $MostrarReservas['NombreHab']; ?> </td>
                            <td> <?php echo $MostrarReservas['Piso']; ?> </td>
                            <td> <?php echo $MostrarReservas['NombrePago']; ?> </td>
                            <td> <?php echo $MostrarReservas['FechadeAlta']; ?> </td>
                            <td>

                                <button type="button" class="buttondelete" data-bs-toggle="modal" data-bs-target="#ModalDeleteReservas">
                                    Borrar
                                </button>

                            </td>

                        </tr>

                    <?php
                    }
                    include ("modal_save.php");
                    include ("DeleteReservas.php");

                    ?>

                    </tbody>
                </table>

            </div>

        </div>

</body>

</html>