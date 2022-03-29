<?php
include ("conexion.php");

$idRegistro = $_REQUEST['id'];

$Eliminar="DELETE FROM clientes WHERE idClientes = '$idRegistro'";

mysqli_query($enlace,$Eliminar);


echo "<script> alert('Se han eliminado los datos correctamente');
    window.location='/Proyecto-web/PHP/datos-registrados.php';
        </script>"

?>
