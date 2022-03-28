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

				<!--<a href="registro.php">
				<button class="animacion-btn" id="boton">Registro</button> Btn-lateral-Regristo 
			</a>
			-->
				<a href="habitaciones.php">
					<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>
				<a href="datos-registrados.php">
					<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>
			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<div id="cuerpo">
			<div id="contenido-cuerpo">
			<div class="titulo-animado">
				<ul>
					<li>HOTELES</li>
					<li>RESERVACIONES</li>
					<li>HABITACIONES</li>
				</ul>
			</div>
				<!--galeria img-->
				<div class="container">
					<div class="row">
						<div class="col s12">
							<div class="carousel center-align">
								<div class="carousel-item">
									<h2 class="sub-titulo">HOTELES</h2>
									<div class="linea-division"></div>
									<img src="../img/hotel1.jpg" alt="">
								</div>
								<div class="carousel-item">
									<h2 class="sub-titulo">RESERVAS</h2>
									<div class="linea-division"></div>
									<img src="../img/hotel2.jpg" alt="">
								</div>
								<div class="carousel-item">
									<h2 class="sub-titulo">REGISTROS</h2>
									<div class="linea-division"></div>
									<img src="../img/hotel3.jpg" alt="">
								</div>
								<div class="carousel-item">
									<h2 class="sub-titulo">VIAJES</h2>
									<div class="linea-division"></div>
									<img src="../img/hotel4.jpg" alt="">
								</div>
								<div class="carousel-item">
									<h2 class="sub-titulo">DATOS</h2>
									<div class="linea-division"></div>
									<img src="../img/hotel5.jpg" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="pie">
				<p>© 2022 México, Acapulco Programación</p>
			</div>
			</div>
		</div>
	</div>
	</div>

</body>

</html>