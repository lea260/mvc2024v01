<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/autos/listar.css">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/navbar.css">
    <title>Listado de Autos</title>
</head>

<body>
    <?php require 'src/views/partials/menu.php'; ?>
    <h1>Listado de Autos</h1>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Fecha de Compra</th>
                    <th scope="col">Editar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autos as $auto) : ?>
                    <tr>
                        <td><?= htmlspecialchars($auto->getId()) ?></td>
                        <td><?= htmlspecialchars($auto->getMarca()) ?></td>
                        <td><?= htmlspecialchars($auto->getModelo()) ?></td>
                        <td><?= htmlspecialchars($auto->getFechaCompra()) ?></td>
                        <td><a href="<?= URL_BASE ?>autos/editar&id=<?= htmlspecialchars($auto->getId()) ?>" aria-label="Editar el auto con id <?= htmlspecialchars($auto->getId()) ?>">Editar</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>