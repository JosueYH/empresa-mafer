<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Lista de Productos</h1>
    <table>
        <tr>
            <th>IdProducto</th>
            <th>Nombre Producto</th>
            <th>Categoría Producto</th>
            <th>Tipo Producto</th>
            <th>Precio Producto</th>
        </tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto['IdProducto']; ?></td>
                    <td><?php echo $producto['nombreProducto']; ?></td>
                    <td><?php echo $producto['categoriaProducto']; ?></td>
                    <td><?php echo $producto['tipoProducto']; ?></td>
                    <td><?php echo $producto['precioProducto']; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="5">No hay productos disponibles.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>
