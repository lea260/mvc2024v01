<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Autos</title>
    <link rel="stylesheet" href="public/css/autos/listar.css">
</head>

<body>
    <h1>Listado de Autos</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Fecha de Compra</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autos as $auto) : ?>
                    <tr>
                        <td data-label="Id"><?= htmlspecialchars($auto->getId()) ?></td>
                        <td data-label="Marca"><?= htmlspecialchars($auto->getMarca()) ?></td>
                        <td data-label="Modelo"><?= htmlspecialchars($auto->getModelo()) ?></td>
                        <td data-label="Fecha de Compra"><?= htmlspecialchars($auto->getFechaCompra()) ?></td>
                        <td data-label="Editar"><a href="<?= URL_BASE ?>autos/editar&id=<?= htmlspecialchars($auto->getId()) ?>">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>