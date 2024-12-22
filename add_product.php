<?php // Formulario para alta de productos
// Incluir archivo de conexión
include('php/conexion.php');    
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Título -->
    <header class="header-product">
        <h1>Agregar Nuevo Producto</h1>
    </header>
    
    <div class="container">
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/*" required>
            </div>
            <button type="submit" name="submit" class="btn-submit">Agregar Producto</button>
        </form>
    </div>

    <?php
    if (isset($_POST['submit'])) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $imagen = $_FILES['imagen']['name'];

        // Mover la imagen a la carpeta img
        move_uploaded_file($_FILES['imagen']['tmp_name'], "images/" . $imagen);

        // Insertar en la base de datos
        $sql = "INSERT INTO productos (nombre, descripcion, precio, imagen) VALUES ('$nombre', '$descripcion', '$precio', '$imagen')";
        if (mysqli_query($conexion, $sql)) {
            echo "<p>Producto agregado correctamente.</p>";
        } else {
            echo "<p>Error: " . mysqli_error($conexion) . "</p>";
        }
    }
    ?>
</body>
</html>

