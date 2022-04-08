<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="..\css\styles.css"> <!-- Conexion HTML con CSS -->
	<link rel="icon" href="../img/img2.png"> <!-- Iconco -->
	<title>Sistema hotelero</title>
</head>

<body>
	<div id="general">

		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img2"> <!-- logo	del sistema -->


				<a href="index.php">
					<button class="animacion-btn" id="boton">Inicio</button> <!-- Btn-lateral-Inicio -->
				</a>

				<a href="habitaciones.php">
					<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>
				<a href="datos-registrados.php">
					<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>

				<a href="registro.php">
					<button class="animacion-btn" id="boton">Registro</button><!-- Btn-lateral-Registro-->
				</a>
			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<!-- Aqui comienza el cuerpo del sistema-->
		<div id="cuerpo">
			<div id="contenido-cuerpo">
				<!--Inicio-Cuadro blanco -->

				<div class="encabezado">
					Servicos:
					<hr>
				</div>
				<div class="grid">
					<div>
						<img src="../img/reservaciones.jpg" height="172px;" alt="">
					</div>
					<div>
						<img src="../img/pago.jpg" height="172px;" alt="">
					</div>
					<div>
						<img src="../img/cama.png" height="172px;" alt="">
					</div>
					<div>
						Reservaciones
					</div>
					<div>
						Métodos de pago
					</div>
					<div>
						Variedad de Habitaciones
					</div>
				</div>
				<br>
				<br>
				<div class="encabezado">
					Servicos de entretenimiento:
					<hr>
				</div>
				<div class="grid2">
					<div>
						<img src="../img/playa.jpg" height="172px;" alt="">
					</div>
					<div>
						<img src="../img/naturaleza.jpg" height="172px;" alt="">
					</div>
					<div>
						<img src="../img/tou.jpg" height="172px;" alt="">
					</div>
					<div>
						Playas
					</div>
					<div>
						Naturaleza
					</div>
					<div>
						Tours
					</div>
				</div>

			</div>
			<!--Fin-Cuadro blanco -->
		</div> <!-- Aqui termina el cuerpo del sistema -->
	</div>
	</div>

</body>

</html>