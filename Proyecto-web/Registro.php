<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles3.css"> <!-- Conexion HTML con CSS -->
	<script src="Mostrar-ocultar-Habitaciones-Resgistr0.js"></script>
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
			<a href="Index.php">
				<button class="animacion-btn" id="btn">Inicio</button> <!-- Btn-lateral-inicio-->
			</a>

			<a href="Registro.php">
				<button class="animacion-btn" id="btn">Registro</button> <!-- Btn-lateral-Regristo -->
			</a>
            <a href="Habitaciones.php">
				<button class="animacion-btn" id="btn">Habitaciones</button> <!-- Btn-lateral-Habitaciones -->
            </a>
                <button class="animacion-btn" id="btn">Datos registrados</button> <!-- Btn-lateral-Regristo -->
			</div>
		</div>
		<!-- aqui termina la Barra de navegacion lateral -->

		<!-- aqui comienza La estructura del cuerpo -->
		<div id="cuerpo">
			<div id="contenido-cuerpo" style="height:727px;"> <!--Cuadro branco -->
				<div id="alineacion-contenido-cuerpo">
					<br>
					<h1 id="titulo-fuente">Resgistro</h1>
					<hr>

                        <div id="registro-alineacion-cuerpo"><!--alenacion de los cuadros de dialogo-->

                            <h3 id="titulo-cuerpo-registro">Nombre</h3>
                            <input type="Nombre" name="Nombre" class="espaciado">

                            <h3 id="titulo-cuerpo-registro">Apellido</h3>
                            <input type="Nombre" name="Apellido" class="espaciado">

                            <h3 id="titulo-cuerpo-registro">Telefono</h3>
                            <input type="Nombre" name="Telefono" class="espaciado">

                            <h3 id="titulo-cuerpo-registro">Correo</h3
                            <input type="Nombre" name="Correio" class="espaciado">

                            <!--	<a href="Habitaciones.php"> -->
                            <button class="animacion-btn" id="btn-habitaciones" onclick="mostrarhabitacion();"> V Habitaciones V </button>
                        </div>


				</div>
				<div id="oculto-habitaciones" style="display: none">
					<br>
					<br>
					<br>
					<br>
					<h1 id="alineacion-contenido-cuerpo">Habitaciones</h1>
					<hr id="alineacion-contenido-cuerpo">

					Lorem ipsum dolor sit amet consectetur adipiscing elit aenean ut vel, blandit placerat maecenas donec tempor magna sapien euismod class cubilia, congue fermentum integer ultrices varius fames nam at rutrum. Venenatis integer sem habitant nam odio metus a habitasse, maecenas hendrerit rutrum sapien pellentesque sociis suscipit, etiam mus senectus hac aptent aenean nibh. Nunc vivamus lacinia nulla auctor pulvinar gravida nisi, potenti rutrum class torquent nullam ridiculus, quis tortor accumsan taciti fames sociosqu.

					Risus fames etiam mattis sociosqu mi a, consequat ultricies dictum suspendisse iaculis eros integer, pretium malesuada magna eget justo. Ullamcorper consequat litora facilisis sollicitudin ligula massa varius nisl, convallis diam taciti erat penatibus cras tempor cum, mi pretium pharetra pulvinar mattis arcu vestibulum. Pellentesque purus proin convallis vel velit nullam aenean accumsan, eleifend consequat metus auctor per hendrerit risus phasellus inceptos, sagittis taciti ac senectus eget sem habitasse.
				</div>

			</div>



		</div>
	</div>

</body>
</html>