<?php // Gestión de productos (solo admin)
// Incluir archivos necesarios
include 'php/conexion.php';
include 'php/functions.php';

// Obtener productos
$productos = obtenerProductos($conexion);

// Manejo de eliminación
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['eliminar'])) {
    $id = $_POST['id'];
    if (eliminarProducto($conexion, $id)) {
        header("Location: admin.php?mensaje=Producto eliminado con éxito");
        exit();
    } else {
        $error = "No se pudo eliminar el producto.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Administración de Productos</title>
</head>
<body>

    <!-- Título -->
    <header class="header-product">
        <h1>Administración de Productos</h1>
    </header>
    
    <div class="table-container">
        <?php if (!empty($_GET['mensaje'])): ?>
            <p style="color: green;"><?php echo htmlspecialchars($_GET['mensaje']); ?></p>
        <?php endif; ?>
        <?php if (!empty($error)): ?>
            <p style="color: red;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <table>
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><img src="images/<?php echo $producto['imagen']; ?>" alt="<?php echo htmlspecialchars($producto['nombre']); ?>"></td>
                    <td><?php echo htmlspecialchars($producto['nombre']); ?></td>
                    <td class="description"><?php echo htmlspecialchars($producto['descripcion']); ?></td>
                    <td class="price">$<?php echo number_format($producto['precio'], 2); ?></td>
                    <td class="action-buttons">
                        <button class="edit" onclick="location.href='edit_product.php?id=<?php echo $producto['id']; ?>'">Editar</button>
                        <form method="POST" style="display:inline;" onsubmit="return confirm('¿Estás seguro de que quieres eliminar este producto?');">
                            <input type="hidden" name="id" value="<?php echo $producto['id']; ?>">
                            <button class="delete" type="submit" name="eliminar">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>