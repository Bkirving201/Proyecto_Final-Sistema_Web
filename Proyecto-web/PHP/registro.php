<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/styles-registro.css"> <!-- Conexion HTML con CSS -->
<!--	<script src="Mostrar-ocultar-Habitaciones-Resgistr0.js"></script> --> <!--Conexion Js -->
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

				<img src="img2.png" id="img1"> <!-- logo -->
			<a href="Prieva1.html">
				<button class="animacion-btn" id="btn">Inicio</button> <!-- Btn-lateral-inicio-->
			</a>

			<a href="Prieva2.html">
				<button class="animacion-btn" id="btn">Registro</button> <!-- Btn-lateral-Regristo -->
			</a>
            <a href="Prieva4.html">
				<button class="animacion-btn" id="btn">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
            </a>
                <button class="animacion-btn" id="btn">Datos registrados</button> <!-- Btn-lateral-Regristo -->
			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<!-- aqui comienza La estructura del cuerpo -->
		<div id="cuerpo">
			<div id="contenido-cuerpo" style="height:640px;"> <!--Cuadro branco -->
				<div id="alineacion-contenido-cuerpo">
					<br>
					<h1 id="alineacion-contenido-cuerpo">Resgistro</h1>
					<hr>
					<div id="registro-alineacion-cuerpo"><!--alenacion de los cuadros del forms-->
							<h3 id="titulo-cuerpo-registro">Nombre</h3>
							<input type="Nombre" name="Nombre" id="espaciado">
							<h3 id="titulo-cuerpo-registro">Apellido</h3>
							<input type="Nombre" name="Apellido" id="espaciado">
							<h3 id="titulo-cuerpo-registro">Telefono</h3>
							<input type="Nombre" name="Telefono" id="espaciado">
							<h3 id="titulo-cuerpo-registro">Correo</h3>
							<input type="Nombre" name="Correio" id="espaciado">

						<div id="btn-alineacion">
							<button class="animacion-btn" id="btn-habitaciones" onclick="alerta();">----- Guardar -----</button>
							<a href="Prieva4.html"><button class="animacion-btn" id="btn-habitaciones" <!-- onclick="mostrarhabitacion();-->">--- Habitaciones ---</button></a>
							<br>
							<br>
						</div>

                    </div>
<!--
				</div>
				<div id="oculto-habitaciones" style="display: none">
					<br>
					<br>
					<br>
					<br>
					<h1 id="alineacion-contenido-cuerpo">Habitaciones</h1>
					<hr id="alineacion-contenido-cuerpo">

					<div id="btn-habitaciones-oculto-habitaciones">

						<div id="alineacion-oculto-habitaciones" class="sombra">
							<div id="img"></div>
							<div id="contenido-cuadro-habitaciones"></div>
						</div>
						<div id="alineacion-oculto-habitaciones" class="sombra">

						</div>

					</div>
				</div>
	-->

			</div>



		</div>
	</div>

</body>
</html>