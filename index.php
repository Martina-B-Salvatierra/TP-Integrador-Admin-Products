<?php
// Incluir archivo de conexión y funciones
include('php/conexion.php');
include('php/functions.php');

// Obtener productos desde la base de datos
$productos = obtenerProductos();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Título principal -->
    <header class="main-header">
        <h1>Productos Disponibles</h1>
        <p>Descubre nuestra selección de productos destacados.</p>
    </header>

    <!-- Contenedor de productos -->
    <div class="product-container">
        <?php while($producto = mysqli_fetch_assoc($productos)): ?>
            <div class="product-card">
                <img src="images/<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" class="product-image">
                <h2 class="product-name"><?php echo $producto['nombre']; ?></h2>
                <p class="product-price"><?php echo "$" . number_format($producto['precio'], 2); ?></p>
                <button class="action-button">Agregar al carrito</button>
            </div>
        <?php endwhile; ?>
    </div>

</body>
</html>
