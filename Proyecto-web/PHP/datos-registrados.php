<!DOCTYPE html>
<html>
<head>
	<?php $coneccion=mysqli_connect('localhost','root','','sistema_web');?>
	<link rel="stylesheet" type="text/css" href="../css/styles-datos-registrados.css"> <!-- Conexion HTML con CSS -->
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

				<img src="..\img\img2.png" id="img1">  <!-- logo -->
			<a href="index.php">
				<button class="animacion-btn" id="boton" >Inicio</button>
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
			<div id="contenido-cuerpo"> <!--Cuadro branco -->

                <h1 style="text-align: center;">Datos registrados</h1>
				<br>
				<h2 id="titulo"> Informacion genral de las habitacion </h2>
				<hr style="margin-left: 30px; margin-right: 30px;">
				<br>
				<div id="tabla" style="	display: flex;">

					<table>
						<tr id="espacio">
							<th class="encabezado"> No. habitacion </th>
							<th class="encabezado"> Tipo de habitacion </th>
							<th class="encabezado"> tipo de cama </th>
							<th class="encabezado"> Limite de personas </th>
							<th class="encabezado"> Estado </th>
							<th class="encabezado"> Precio por noche </th>
							
							
						</tr>
					
						<?php 
													
							
							$sql= "SELECT *  FROM `habitaciones`";
							$result=mysqli_query($coneccion,$sql);
							
							while($mostrar=mysqli_fetch_array($result)){

							
						?>
						<tr>
							<th><?php echo $mostrar['No. habitación']?></th>
							<th><?php echo $mostrar['Tipo de habitación']?></th>
							<th><?php echo $mostrar['Tipo de cama']?></th>
							<th><?php echo $mostrar['Limite de personas']?></th>
							<th><?php echo $mostrar['Estado']?></th>
							<th><?php echo $mostrar['Precio por noche']?></th>
						</tr>
						<?php
						}
						?>
						
					</table>

				</div>
		</div>
	</div>

</body>
</html>