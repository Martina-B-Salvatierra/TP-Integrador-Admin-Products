<?php 
// Funciones para interactuar con la base de datos

    // Incluir la conexión a la base de datos
    include('conexion.php');

    // Función para obtener todos los productos
    function obtenerProductos() {
        global $conexion;
        $query = "SELECT * FROM productos";
        $resultado = mysqli_query($conexion, $query);
        return $resultado; // Retorna los resultados para mostrarlos en la vista
    }

    // Función para obtener un producto específico por su id
    function obtenerProductoPorId($id) {
        global $conexion;
        $query = "SELECT * FROM productos WHERE id = $id";
        $resultado = mysqli_query($conexion, $query);
        return mysqli_fetch_assoc($resultado); // Retorna un solo producto como un array asociativo
    }

    // Función para insertar un nuevo producto
    function insertarProducto($nombre, $descripcion, $precio, $imagen) {
        global $conexion;
        $query = "INSERT INTO productos (nombre, descripcion, precio, imagen) 
                VALUES ('$nombre', '$descripcion', $precio, '$imagen')";
        return mysqli_query($conexion, $query); // Retorna verdadero si la inserción es exitosa
    }

    // Función para actualizar un producto existente
    function actualizarProducto($id, $nombre, $descripcion, $precio, $imagen) {
        global $conexion;
        $query = "UPDATE productos 
                SET nombre = '$nombre', descripcion = '$descripcion', precio = $precio, imagen = '$imagen' 
                WHERE id = $id";
        return mysqli_query($conexion, $query); // Retorna verdadero si la actualización es exitosa
    }

    // Función para eliminar un producto
    function eliminarProducto($id) {
        global $conexion;
        $query = "DELETE FROM productos WHERE id = $id";
        return mysqli_query($conexion, $query); // Retorna verdadero si la eliminación es exitosa
    }

?>