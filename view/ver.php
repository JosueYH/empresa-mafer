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
    <?php
    if (!isset($productos)) {
        echo "Error: No se han pasado productos a la vista.";
    } else {
        echo "<pre>";
        var_dump($productos); // Verifica el contenido de $productos
        echo "</pre>";
    }
    ?>
    <table>
        <tr>
            <th>Identificador</th>
            <th>Nombre</th>
            <th>Categoría</th>
            <th>Tipo</th>
            <th>Precio</th>
        </tr>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $prod): ?>
                <tr>
                    <td><?php echo $prod['idProducto']; ?></td>
                    <td><?php echo $prod['nombreProducto']; ?></td>
                    <td><?php echo $prod['categoriaProducto']; ?></td>
                    <td><?php echo $prod['tipoProducto']; ?></td>
                    <td><?php echo $prod['precioProducto']; ?></td>
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
