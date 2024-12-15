<?php // Página principal: visualización del cliente

    // Archivo de conexión a la base de datos
    include('php/conexion.php');

    // Consultar los productos
    $query = "SELECT * FROM productos";
    $result = $mysqli->query($query);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Google Fonts (Poppins) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <h1>Catálogo de Productos</h1>
    </header>

    <main>
        <div class="product-container">
            <?php while ($product = $result->fetch_assoc()): ?>
                <div class="product-card">
                    <!-- Mostrar la imagen con la ruta adecuada -->
                    <img src="images/<?= $product['imagen'] ?>" alt="<?= $product['nombre'] ?>">
                    <h3><?= $product['nombre'] ?></h3>
                    <p><?= $product['descripcion'] ?></p>
                    <span class="price"><?= "$" . number_format($product['precio'], 2) ?></span>
                </div>
            <?php endwhile; ?>
        </div>
    </main>

    <footer>
        <p>© 2024 Todos los derechos reservados</p>
    </footer>

    <script src="js/script.js"></script>
</body>
</html>

<?php $mysqli->close(); ?>