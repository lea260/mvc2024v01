<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Auto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/autos/editar.css">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/navbar.css">

</head>

<body>
    <?php require 'src/views/partials/menu.php'; ?>
    <h1>Editar Auto</h1>

    <!-- Formulario de Edición -->
    <div class="form-container">
        <form action="<?= URL_BASE ?>autos/modificar" method="post" id="miFormulario">
            <input type="hidden" name="id" value="<?= htmlspecialchars($auto->getId()) ?>">

            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" value="<?= htmlspecialchars($auto->getMarca()) ?>" required>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" value="<?= htmlspecialchars($auto->getModelo()) ?>" required>

            <label for="fechaCompra">Fecha de Compra:</label>
            <input type="date" id="fechaCompra" name="fechaCompra" value="<?= htmlspecialchars($auto->getFechaCompra()) ?>" required>

            <button type="submit" class="btn btn-primary">Actualizar Auto</button>
        </form>

        <!-- Formulario de Eliminación -->
        <form action="<?= URL_BASE ?>autos/borrar" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este auto?');">
            <input type="hidden" name="id" value="<?= htmlspecialchars($auto->getId()) ?>">
            <button type="submit" class="btn btn-danger">Eliminar Auto</button>
        </form>
    </div>

    <!-- Botones adicionales -->
    <div class="btn-container">
        <input type="button" id="editarBtn" value="Editar" class="btn">
        <input type="button" id="borrarBtn" value="Borrar" class="btn">
    </div>

    <script src="<?= URL_BASE_PATH ?>public/js/index.js"></script>
</body>

</html>