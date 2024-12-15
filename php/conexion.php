<?php // Configuración de la base de datos

    // Datos de conexión a la base de datos
    $servidor = "localhost";   
    $usuario = "root";         
    $contraseña = "";          
    $nombre_base_de_datos = "tienda"; 

    // Crear la conexión
    $mysqli = new mysqli($servidor, $usuario, $contraseña, $nombre_base_de_datos);

    // Comprobar si la conexión fue exitosa
    if ($mysqli->connect_error) {
        die("Conexión fallida: " . $mysqli->connect_error);
    }

?>