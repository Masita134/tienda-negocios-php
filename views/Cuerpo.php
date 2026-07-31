<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Productos</title>
</head>
<body>

    <h1 align="center">Mis Productos 🛒</h1>

    <table border="1" align="center" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Marca</th>
                <th>Precio</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?php echo $producto->getName(); ?></td>
                    <td><?php echo $producto->getMarca(); ?></td>
                    <td>$<?php echo $producto->getPrecio(); ?></td>
                    <td><?php echo $producto->getStock(); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>