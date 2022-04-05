<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<?php
include ("conexion.php");

$id_habitacion=filter_input(INPUT_POST,'id_habitacion');

$consulta="SELECT * FROM habitacion WHERE NombreHab='$id_habitacion' AND Estado = 'Disponible'";
$resultado=mysqli_query($enlace,$consulta);
?>

<option selected>Seleccionar....</option>


<?php
while ($mostrar=mysqli_fetch_assoc($resultado)){

    ?>

    <option value="<?php echo $mostrar['idHabitacion']; ?>"
            data-piso="<?php echo $mostrar['Piso']; ?> " data-precio="<?php echo $mostrar['Precio']; ?>" >

        <?php echo $mostrar['Descripcion']; ?> </option>

    <?php
}
?>