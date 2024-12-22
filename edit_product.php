<?php // Formulario para edición de productos
// Incluir archivo de conexión
include('php/conexion.php');

// Verificar si se ha recibido un ID de producto en la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conexion, $sql);
    $producto = mysqli_fetch_assoc($result);
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Título -->
    <header class="header-product">
        <h1>Editar Producto</h1>
    </header>

    <div class="container">
        <?php if (isset($producto)): ?>
        <form action="edit_product.php?id=<?php echo $producto['id']; ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" value="<?php echo $producto['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea id="descripcion" name="descripcion" rows="4" required><?php echo $producto['descripcion']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="precio" name="precio" value="<?php echo $producto['precio']; ?>" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" id="imagen" name="imagen" accept="image/*">
                <p>Imagen actual: <img src="images/<?php echo $producto['imagen']; ?>" alt="Imagen actual" width="100"></p>
            </div>
            <button type="submit" name="submit" class="btn-submit">Actualizar Producto</button>
        </form>
        <?php endif; ?>

        <?php
        if (isset($_POST['submit'])) {
            $nombre = $_POST['nombre'];
            $descripcion = $_POST['descripcion'];
            $precio = $_POST['precio'];
            $imagen = $_FILES['imagen']['name'];

            // Si se ha subido una nueva imagen, moverla a la carpeta "images"
            if ($imagen) {
                move_uploaded_file($_FILES['imagen']['tmp_name'], "images/" . $imagen);
                $sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio', imagen = '$imagen' WHERE id = $id";
            } else {
                // Si no se sube una nueva imagen, no cambiarla
                $sql = "UPDATE productos SET nombre = '$nombre', descripcion = '$descripcion', precio = '$precio' WHERE id = $id";
            }

            if (mysqli_query($conexion, $sql)) {
                echo "<p>Producto actualizado correctamente.</p>";
            } else {
                echo "<p>Error: " . mysqli_error($conexion) . "</p>";
            }
        }
        ?>
    </div>
</body>
</html>
