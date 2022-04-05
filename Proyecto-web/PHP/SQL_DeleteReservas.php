<?php

include ("conexion.php");


// Aqui borro la reserva
$IdReserva = $_REQUEST['idReserva'];
$IdCliente = $_REQUEST['idClientes'];
$IdPago = $_REQUEST['idPago'];
$IdHabitacion = $_REQUEST['idHabitacion'];


$EliminarReserva="DELETE FROM reservas WHERE idReserva = '$IdReserva'";
mysqli_query($enlace,$EliminarReserva);


// Aqui borro el Cliente

$EliminarCliente="DELETE FROM clientes WHERE idClientes='$IdCliente'";
mysqli_query($enlace,$EliminarCliente);


//Aquí borro la forma de pago

$ConsultaDatos = "SELECT * FROM formapago WHERE idPago = '$IdPago'";
$Resultados = (mysqli_query($enlace,$ConsultaDatos));

    while ($Datos=mysqli_fetch_assoc($Resultados)){

        $efectivo=$Datos['efectivo_idEfectivo'];
        $credito =$Datos['credito_idTarjeta'];
        $debito  =$Datos['debito_idTarjeta'];
    }

$EliminarFormaPago = "DELETE FROM formapago  WHERE idPago = '$IdPago'";
mysqli_query($enlace,$EliminarFormaPago);

// Condicionales para borrar los datos de las tablas por indiviual segun el pago del cliente

if ($efectivo != NULL ){

    $EliminarPago="DELETE FROM efectivo  WHERE idEfectivo = '$efectivo'";
    mysqli_query($enlace,$EliminarPago);

}


else if ($credito != NULL ){

    $EliminarPago="DELETE FROM credito  WHERE idTarjeta = '$credito'";
    mysqli_query($enlace,$EliminarPago);

}

else if ($debito != NULL ){

    $EliminarPago="DELETE FROM debito  WHERE idTarjeta = '$debito'";
    mysqli_query($enlace,$EliminarPago);

}

// Cambiar estado habitacion


$ActualizarEstado = "UPDATE habitacion SET 
                     Estado = 'Disponible' WHERE idHabitacion = '$IdHabitacion'";

$QUERYUPDATE = mysqli_query($enlace,$ActualizarEstado);

echo "<script> alert('Se han actualizado los datos correctamente');
    window.location='/Proyecto-web/PHP/registro.php';
        </script>"

?>