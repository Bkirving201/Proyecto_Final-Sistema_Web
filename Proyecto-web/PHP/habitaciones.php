<!DOCTYPE html>
<html>

<head>
	<?php
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado	
	?>


	<script src="../js/JavaScript.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/styles-habitaciones.css"> <!-- Conexion HTML con CSS -->
	<link rel="preconnect" href="https://fonts.googleapis.com"> <!-- google fonts -->
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> <!-- google fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet"> <!-- titulo fuente -->
	<link href="https://fonts.googleapis.com/css2?family=Gideon+Roman&display=swap" rel="stylesheet"> <!-- fuente general-->
	<title>Sistema hotelero (beta 1)</title>
</head>

<body>
	<div id="general">

		<!-- aqui comienza la Barra de navegacion lateral -->
		<div id="navegacion">

			<div id="navegacion-alineacion">

				<img src="..\img\img2.png" id="img1"> <!-- logo -->
				<a href="index.php">
					<button class="animacion-btn" id="boton">Inicio</button>
				</a>

				<a href="habitaciones.php">
					<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				</a>
				<a href="datos-registrados.php">
					<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
				</a>

                <a href="registro.php?pagina=1">
                    <button class="animacion-btn" id="boton">Registro</button>
                </a>


			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<div id="cuerpo">
			<div id="contenido-cuerpo">
				<!--Cuadro branco -->
				<h1 style="text-align: center;">Habitaciones</h1>


				<div class="tarjetas">
					<div id="hbt">
						<img src="../img/bed2.png" width="230px" height="168px" alt="imagen-cama">
						<h3 id="contenido-tarjetas">Habitaciones sencillas</h3>
						<h4 id="contenido-tarjetas" style="font-weight: normal;">Costo por noche $700</h4>
						<a href="./registro.php?pagina=1">
							<button class="animacion-btn" id="btn-tarjetas" method="post" action="./registro.php?pagina=1" name="hbt-s"> ver </button>
						</a>
					</div>
					<div id="hbt">
						<img src="../img/bed2.png" width="230px" height="168px" alt="imagen-cama">
						<h3 id="contenido-tarjetas">Habitaciones dobles</h3>
						<h4 id="contenido-tarjetas" style="font-weight: normal;">Costo por noche $700</h4>
                        <a href="./registro.php?pagina=1">
							<button class="animacion-btn" id="btn-tarjetas"> ver </button>
						</a>
					</div>
					<div id="hbt">
						<img src="../img/bed2.png" width="230px" height="168px" alt="imagen-cama">
						<h3 id="contenido-tarjetas">Habitaciones triples</h3>
						<h4 id="contenido-tarjetas" style="font-weight: normal;">Costo por noche $700</h4>
                        <a href="./registro.php?pagina=1">
							<button class="animacion-btn" id="btn-tarjetas"> ver </button>
						</a>
					</div>

				</div>


			</div>
		</div>
	</div>

</body>

</html>