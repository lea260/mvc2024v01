<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Auto</title>
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/autos/listar.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
</head>

<body>
    <?php require  'src/views/partials/menu.php'; ?>
    <h1>Editar Auto</h1>

    <!-- Formulario de Edición -->
    <form action="<?= URL_BASE ?>autos/modificar" method="post" id="miFormulario">
        <input type="hidden" name="id" value="<?= htmlspecialchars($auto->getId()) ?>">

        <label for="marca">Marca:</label>
        <input type="text" id="marca" name="marca" value="<?= htmlspecialchars($auto->getMarca()) ?>" required>
        <br>

        <label for="modelo">Modelo:</label>
        <input type="text" id="modelo" name="modelo" value="<?= htmlspecialchars($auto->getModelo()) ?>" required>
        <br>

        <label for="fechaCompra">Fecha de Compra:</label>
        <input type="date" id="fechaCompra" name="fechaCompra" value="<?= htmlspecialchars($auto->getFechaCompra()) ?>" required>
        <br>

        <button type="submit">Actualizar Auto</button>
    </form>
    <br>
    <!-- Formulario de Eliminación -->
    <form action="<?= URL_BASE ?>autos/borrar" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar este auto?');">
        <input type="hidden" name="id" value="<?= htmlspecialchars($auto->getId()) ?>">
        <button type="submit" style="background-color: red; color: white;">Eliminar Auto</button>
    </form>
    <br>
    <input type="button" id="editarBtn" value="editar">
    <input type="button" id="borrarBtn" value="borrar">
    <script src="<?= URL_BASE_PATH ?>public/js/index.js"></script>
</body>

</html>