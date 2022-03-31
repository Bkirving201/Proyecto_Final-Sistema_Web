<!DOCTYPE html>
<html>

<head>
	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="..\css\styles.css"> <!-- Conexion HTML con CSS -->
	<link rel="icon" href="img/img2">
	<title>Sistema hotelero (beta 1)</title>
</head>

<body>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script src="../js/galeria.js"></script>

	<div id="general">

		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img2"> <!-- logo -->


				<a href="index.php">
					<button class="animacion-btn" id="boton">Inicio</button>
				</a>

				<a href="habitaciones.php">
					<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>
				<a href="datos-registrados.php">
					<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>

                <a href="registro.php">
                    <button class="animacion-btn" id="boton">Registro</button>
                </a>
            </div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

        <?php
        include ("conexion.php");
        $consulta="SELECT * FROM habitacion";
        $resultados=mysqli_query($enlace,$consulta);

        while ($mostrar=mysqli_fetch_array($resultados)); {

        ?>

		<div id="cuerpo">
			<div id="contenido-cuerpo">

                <div class="grid">

                </div>
			</div>
		</div>
        <?php
        }
        ?>

	</div>
	</div>

</body>

</html>