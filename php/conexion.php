<?php
// Conexión a la base de datos "tienda"

    // Configuración de la base de datos
    $servidor = 'localhost'; // Dirección del servidor MySQL
    $usuario = 'root';       // Usuario de la base de datos
    $contraseña = '';        // Contraseña de la base de datos
    $baseDeDatos = 'tienda'; // Nombre de la base de datos

    // Crear la conexión
    $conexion = mysqli_connect($servidor, $usuario, $contraseña, $baseDeDatos);

    // Verificar la conexión
    if (!$conexion) {
        die("Conexión fallida: " . mysqli_connect_error());
    }

    // Establecer la codificación de caracteres a UTF-8 para evitar problemas con caracteres especiales
    mysqli_set_charset($conexion, 'utf8');

    // Para cerrar la conexión cuando ya no se necesite:
    // mysqli_close($conexion);

?>