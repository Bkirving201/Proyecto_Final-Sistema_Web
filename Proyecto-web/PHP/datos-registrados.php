<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> <!--Conexion-bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> <!--Conexion-bootstrap-->
    <link rel="stylesheet" type="text/css" href="../css/styles-datos-registrados.css"> <!-- Conexion HTML con CSS -->
	<link rel="icon" href="../img/img2.png"> <!-- Iconco -->
	<title>Sistema hotelero</title>

</head>

<body>
	<div id="general">
		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img1"> <!-- logo	del sistema -->
				<a href="index.php">
					<button class="animacion-btn" id="boton">Inicio</button> <!-- Btn-lateral-Inicio -->
				</a>

				<a href="habitaciones.php">
					<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>

				<a href="datos-registrados.php">
					<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>

                <a href="registro.php?pagina=1">
                    <button class="animacion-btn" id="boton">Registro</button> <!-- Btn-lateral-Registro-->
                </a>

			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->
    	
        <!-- Aqui comienza el cuerpo del sistema-->
		<div id="cuerpo">
			<div id="contenido-cuerpo"><!--Cuadro branco -->

                <h2 id="titulo"> Clientes </h2> <!--Titulo-Principal-->
                <hr style="margin-left: 30px; margin-right: 30px;">

                <!-- Inicio - Tabla de boostrap 5 -->
                <table class="table table-hover" id="alineacion-tabla">

                    <thead> <!--Columnas-->
                        <tr class="tittleback">
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Identificacion</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- Conexion con PHP para realizar la consulta a la base de datos y traer los datos -->

                        <?php
                        $cont = include ("conexion.php");
                        if ($cont == true){
                        $consulta="SELECT * FROM clientes";
                        $resultado = mysqli_query($enlace,$consulta);

                        while ($mostrar=mysqli_fetch_array($resultado)){


                        ?>

                            <tr> <!--Filas-->
                                <td class="datatable"> <?php echo $mostrar['Nombre'] ?> </td>
                                <td class="datatable"> <?php echo $mostrar['Apellidos'] ?> </td>
                                <td class="datatable"> <?php echo $mostrar['Telefono'] ?> </td>
                                <td class="datatable"> <?php echo $mostrar['Identificacion'] ?> </td>
                                <td class="datatable"> <?php echo $mostrar['Correo'] ?> </td>
                                <td class="datatable"> <?php echo $mostrar['Fechadeingreso'] ?> </td>
                                <td id="alineacion-btn">

                                   <button type="button" class="buttonupdate" data-bs-toggle="modal" data-bs-target="#updatemodal<?php echo $mostrar['idClientes'];?>">
                                        Editar
                                    </button> <!-- Boton - Editar-->
                                    <br><br>
                                    <button type="button" class="buttondelete" data-bs-toggle="modal" data-bs-target="#deletetemodal<?php echo $mostrar['idClientes'];?>">
                                        Eliminar
                                    </button> <!-- Boton - Eliminar-->
                                </td>
                            </tr>
                            <!-- no borrar este PHP, cierra la parte superior -->

                            <?php
                            $modalEdit=include ("Editar.php");
                            ?>

                            <?php
                            $modalDelete=include ("Eliminar.php");
                            ?>

                        <?php
                        }
                        }
                        ?>
                        <!-- Aqui acaba -->
                    </tbody>
                </table>
                  <!-- Fin - Tabla de boostrap 5 -->
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
		</div> <!--Fin-Cuadro branco -->
	</div>  <!-- Aqui termina el cuerpo del sistema -->

</body>

</html>