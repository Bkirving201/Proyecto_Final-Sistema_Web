<?php
$base=include ("conexion.php");

$idhabitacion = $_REQUEST['id'];
$nombreHab    =$_REQUEST['nombre'];
$precio       =$_REQUEST['precio'];
$descripcion  =$_REQUEST['descripcion'];
$estado       =$_REQUEST['estado'];
$piso         =$_REQUEST['piso'];


$actualizacion = "UPDATE habitacion SET 
                    NombreHab = '$nombreHab',
                    Descripcion = '$descripcion',
                    Precio = '$precio',
                    Piso = '$piso',
                    Estado = '$estado' WHERE idHabitacion = '$idhabitacion'";

$resultado_update=mysqli_query($enlace,$actualizacion);

echo "<script> alert('Se han actualizado los datos correctamente');
    window.location='/Proyecto-web/PHP/registro.php';
        </script>"
?>