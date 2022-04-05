<?php

include ("conexion.php");

//datos del cliente

$nombrecliente   =$_REQUEST['nombrecliente'];
$apellidocliente =$_REQUEST['apellidocliente'];
$identificacion  =$_REQUEST['identificacion'];
$telefono        =$_REQUEST['telefono'];
$correo          =$_REQUEST['gmail'];
$tipodepago =$_REQUEST['tipodepago'];

// Metodos de pago acorde a la seleccion de cada uno
// Efectivo

$propietarioefectivo = $_REQUEST['propietarioefectivo'];
$montoefectivo = $_REQUEST['montoefectivo'];
$fechaefectivo = $_REQUEST['fechaefectivo'];


// Credito

$propietariocredito=$_REQUEST['propietariocredito'];
$numtarjetacredito = $_REQUEST['ntarjetacredito'];
$cvvcredito=$_REQUEST['cvvcredito'];
$fechacadcredito=$_REQUEST['fechacadcredito'];

//Debito

$propietariodebito=$_REQUEST['propietariodebito'];
$numtarjetadebito = $_REQUEST['ntarjetadebito'];
$cvvdebito = $_REQUEST['cvvdebito'];
$fechadebito = $_REQUEST['fechacaddebito'];

//Siguientes datos

$tipodehabitacion = $_REQUEST['tipohabitacion'];
$descripcionelegida = $_REQUEST['descripcionelegida'];
$precio=$_REQUEST['precio'];
$Piso=$_REQUEST['piso'];

//De esta forma por el metodo get jalo todos los datos de cada casilla y select para manejar datos.

if ($_REQUEST=''){

}




$altadedatos = "INSERT INTO clientes (idClientes,Nombre,Apellidos,Telefono,Identificacion,Correo,Fechadeingreso) value 
                
                (NULL,'$nombrecliente','$apellidocliente','$telefono','$identificacion','$correo', NOW())";

$resultadoguardardo=mysqli_query($enlace,$altadedatos);


if($tipodepago=='efectivo'){

    $altadedatos1 = "INSERT INTO efectivo (idEfectivo,Nombre,Monto,Fecha) value 
                    (NULL,'$propietarioefectivo','$montoefectivo','$fechaefectivo')";

    $resultadoguardardo1=mysqli_query($enlace,$altadedatos1);

}
else if ($tipodepago=='credito'){

    $altadedatos2 = "INSERT INTO credito (idTarjeta,Propietario,Num_Tarjeta,CVV,Caduca) value 
                    (NULL,'$propietariocredito','$numtarjetacredito','$cvvcredito','$fechacadcredito')";

    $resultadoguardardo2 = mysqli_query($enlace,$altadedatos2);
}

else if ($tipodepago=='debito'){

    $altadedatos3 = "INSERT INTO debito (idTarjeta,Propietario,Num_Tarjeta,CVV,Caduca) value 
                    (NULL,'$propietariodebito','$numtarjetadebito','$cvvdebito','$fechadebito')";

    $resultadoguardardo3=mysqli_query($enlace,$altadedatos3);

}


$actualizarhabitacion = "UPDATE habitacion SET 
                         Estado = 'Ocupada' WHERE idHabitacion = '$descripcionelegida'";

$altadedatos4=mysqli_query($enlace,$actualizarhabitacion);



// Aqui acaba la alta de los datos desde el formulario y ahora comienza el registro interno de las tablas necesarias


if($tipodepago=='efectivo'){

$Recolectardatos = "SELECT * FROM efectivo";
$DatosRecolectado = mysqli_query($enlace,$Recolectardatos);

while ($mostar = mysqli_fetch_assoc($DatosRecolectado)){

    $idPago = $mostar['idEfectivo'];
    $idnombrepago = 'Efectivo';}


$altadedatos5="INSERT INTO formapago(idPago,NombrePago,credito_idTarjeta,debito_idTarjeta,efectivo_idEfectivo) value 
                (NULL,'$idnombrepago',NULL,NULL,'$idPago')";

$resultadoguardardo4=mysqli_query($enlace,$altadedatos5);

}

else if($tipodepago=='credito'){

    $Recolectardatos="SELECT * FROM credito";
    $DatosRecolectado=mysqli_query($enlace,$Recolectardatos);

    while ($mostar=mysqli_fetch_assoc($DatosRecolectado)){

        $idPago = $mostar['idTarjeta'];
        $idnombrepago = 'Tarjeta de Credito';

    }

    $altadedatos5="INSERT INTO formapago(idPago,NombrePago,credito_idTarjeta,debito_idTarjeta,efectivo_idEfectivo) value 
                    (NULL,'$idnombrepago','$idPago',NULL,NULL )";

    $resultadoguardardo4=mysqli_query($enlace,$altadedatos5);

}

else if ($tipodepago=='debito'){

    $Recolectardatos="SELECT * FROM debito";
    $DatosRecolectado=mysqli_query($enlace,$Recolectardatos);

    while ($mostar=mysqli_fetch_assoc($DatosRecolectado)){

        $idPago = $mostar['idTarjeta'];
        $idnombrepago = 'Tarjeta de Debito';
    }
    $altadedatos5="INSERT INTO formapago(idPago,NombrePago,credito_idTarjeta,debito_idTarjeta,efectivo_idEfectivo) value 
                    (NULL,'$idnombrepago',NULL,'$idPago',NULL)";

    $resultadoguardardo4=mysqli_query($enlace,$altadedatos5);

}

// De esta forma guarda datos dentro de las tablas correspondientes

// Ahora definiremos los datos para la tabla de consultas y estas deberan mostrar los datos necesarios en la tabla del sistema


$consultaReserva = "SELECT * FROM clientes";
$ResultadoReserva = mysqli_query($enlace,$consultaReserva);

    while ($MostarReserva=mysqli_fetch_assoc($ResultadoReserva)){

        $idCliente=$MostarReserva['idClientes'];

    }

    //INSTRUCCION IF PARA GUARDAR DATOS DENTRO DE LA TABLA DE RESERVA

if($tipodepago=='efectivo'){

$ConsultaPago="SELECT formapago.idPago, efectivo.idEfectivo FROM formapago,efectivo WHERE formapago.efectivo_idEfectivo = efectivo.idEfectivo";

$ResultadoPago=mysqli_query($enlace,$ConsultaPago);

while ($MostrarPago=mysqli_fetch_assoc($ResultadoPago)){

    $IDdelPago=$MostrarPago['idPago'];

}

    $AltaReserva = "INSERT INTO reservas (idReserva,Clientes_idClientes,Habitacion_idHabitacion,FormaPago_idPago,FechadeAlta) value 
                    (NULL,'$idCliente','$descripcionelegida','$IDdelPago',NOW())";

    $CargaDatos = mysqli_query($enlace,$AltaReserva);
}

else if ($tipodepago=='credito'){

    $ConsultaPago="SELECT formapago.idPago, credito.idTarjeta FROM formapago,credito WHERE formapago.credito_idTarjeta = credito.idTarjeta";

    $ResultadoPago=mysqli_query($enlace,$ConsultaPago);

    while ($MostrarPago=mysqli_fetch_assoc($ResultadoPago)){

        $IDdelPago=$MostrarPago['idPago'];

    }

    $AltaReserva = "INSERT INTO reservas (idReserva,Clientes_idClientes,Habitacion_idHabitacion,FormaPago_idPago,FechadeAlta) value 
                    (NULL,'$idCliente','$descripcionelegida','$IDdelPago',NOW())";

    $CargaDatos = mysqli_query($enlace,$AltaReserva);

}

else if ($tipodepago=='debito'){

    $ConsultaPago="SELECT formapago.idPago, debito.idTarjeta FROM formapago,debito WHERE formapago.debito_idTarjeta = debito.idTarjeta";

    $ResultadoPago=mysqli_query($enlace,$ConsultaPago);

    while ($MostrarPago=mysqli_fetch_assoc($ResultadoPago)){

        $IDdelPago=$MostrarPago['idPago'];

    }

    $AltaReserva = "INSERT INTO reservas (idReserva,Clientes_idClientes,Habitacion_idHabitacion,FormaPago_idPago,FechadeAlta) value 
                    (NULL,'$idCliente','$descripcionelegida','$IDdelPago',NOW())";

    $CargaDatos = mysqli_query($enlace,$AltaReserva);

}

// De esta forma carga todos los datos donde corresponden ser cargados

echo "<script> alert('Se han agregado los datos correctamente');
    window.location='/Proyecto-web/PHP/registro.php?pagina=1';
      </script>"
?>

?>