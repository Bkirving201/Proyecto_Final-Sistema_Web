<?php
$base=include ("conexion.php");

$idRegistros = $_REQUEST['id'];
$nombre      =$_REQUEST['nombre'];
$apellidos   =$_REQUEST['apellidos'];
$correo      =$_REQUEST['correo'];
$identi      =$_REQUEST['identificacion'];
$telefono    =$_REQUEST['telefono'];


$actualizacion = "UPDATE clientes SET 
                    Nombre = '$nombre',
                    Apellidos = '$apellidos',
                    Telefono = '$telefono',
                    Identificacion = '$identi',
                    Correo = '$correo' WHERE idClientes = '$idRegistros'";

$resultado_update=mysqli_query($enlace,$actualizacion);

echo "<script> alert('Se han actualizado los datos correctamente');
    window.location='/Proyecto-web/PHP/datos-registrados.php';
        </script>"
?>