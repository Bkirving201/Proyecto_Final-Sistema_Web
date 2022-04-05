<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/styles-habitaciones.css"> <!-- Conexion HTML con CSS -->
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
		<!-- Aqui termina la Barra de navegacion lateral -->

		<!-- Aqui comienza el cuerpo del sistema-->
		<div id="cuerpo">
			<div id="contenido-cuerpo"> <!--Inicio-Cuadro branco -->
				<h1 style="text-align: center;">Habitaciones</h1>

				<!-- Inicio-Cards-->
				<div class="tarjetas"> 

					<div id="hbt">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img class="d-block w-100" src="../img/cama2.png" height="206px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama3.png" height="206px" alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama4.png" height="206px" alt="Third slide">
							</div>
						</div>
						</div>
						<h3 id="contenido-tarjetas">Habitaciones sencillas</h3>
						<a href="./registro.php?pagina=1"> <!-- Registro.php -->
							<button class="animacion-btn" id="btn-tarjetas" method="post" action="./registro.php?pagina=1" name="hbt-s"> Reservar </button>
						</a>
					</div>
					
					<div id="hbt">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img class="d-block w-100" src="../img/cama5.png" height="206px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama6.png" height="206px" alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama7.png" height="206px" alt="Third slide">
							</div>
						</div>
						</div>
						<h3 id="contenido-tarjetas">Habitaciones dobles</h3>
                        <a href="./registro.php?pagina=1"> <!-- Registro.php -->
							<button class="animacion-btn" id="btn-tarjetas"> Reservar </button>
						</a>
					</div>
					
					<div id="hbt">
					<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
							<img class="d-block w-100" src="../img/cama8.png" height="206px" alt="First slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama9.png" height="206px" alt="Second slide">
							</div>
							<div class="carousel-item">
							<img class="d-block w-100" src="../img/cama10.png" height="206px" alt="Third slide">
							</div>
						</div>
						</div>
						<h3 id="contenido-tarjetas">Habitaciones triples</h3>
                        <a href="./registro.php?pagina=1"> <!-- Registro.php -->
							<button class="animacion-btn" id="btn-tarjetas"> Reservar </button>
						</a>
					</div>

				</div>
				<!-- Fin-Cards-->
				
			</div> <!--Fin-Cuadro branco -->
		</div>  <!-- Aqui termina el cuerpo del sistema -->
	</div>
</body>
</html>