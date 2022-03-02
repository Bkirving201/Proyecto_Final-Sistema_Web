<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

				<img src="img2.png" id="img1">  <!-- logo -->
			<a href="Prieva1.html">
				<button class="animacion-btn" id="boton">Inicio</button>
			</a>

			<a href="Prieva3.html">
				<button class="animacion-btn" id="boton">Registro</button> <!-- Btn-lateral-Regristo -->
			</a>
				<button class="animacion-btn" id="boton">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
				<button class="animacion-btn" id="boton">Datos registrados</button> <!-- Btn-lateral-Regristo -->
			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->
		
		<div id="cuerpo">
			<div id="contenido-cuerpo"> <!--Cuadro branco -->
				<h1 id="alineacion-contenido-cuerpo">Habitaciones</h1>
				<hr id="alineacion-contenido-cuerpo">

				<div id="btn-habitaciones-oculto-habitaciones">
					<div class="card" style="width: 15rem;">
						<img src="bed2.png" class="card-img-top">
						<div class="card-body">
							<h5 class="card-title">Habitaciones Sencillas</h5>
							<p class="card-text">Costo por noche $700</p>
							<a href="#" class="btn btn-primary" id="btn-habitaciones">Ver</a>
						</div>
					</div>
					<div class="card" style="width: 15rem;">
						<img src="bed2.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Habitaciones Dobles</h5>
							<p class="card-text">Costo por noche $1000</p>
							<a href="#" class="btn btn-primary"  id="btn-habitaciones">Ver</a>
						</div>
					</div>
					<div class="card" style="width: 15rem;">
						<img src="bed2.png" class="card-img-top" alt="...">
						<div class="card-body">
							<h5 class="card-title">Habitaciones Triples</h5>
							<p class="card-text">Costo por noche $1500</p>
							<a href="#" class="btn btn-primary"  id="btn-habitaciones">Ver</a>
						</div>
					</div>
				</div>

				</div>
			</div>
		</div>
	</div>

</body>
</html>