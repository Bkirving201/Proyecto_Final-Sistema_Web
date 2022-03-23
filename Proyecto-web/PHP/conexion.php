<?php
$enlace = mysqli_connect("LocalHost", "root", "", "sistema_hotelero");

if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Éxito: Se realizó una conexión apropiada a MySQL!" . PHP_EOL;
echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

mysqli_close($enlace);
