<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="<?= URL_BASE_PATH ?>public/css/index/index.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>
    <?php require  'src/views/partials/menu.php'; ?>
    <h1>Ingresar</h1>

    <!-- Formulario de Edición -->
    <form action="<?= URL_BASE ?>autos/modificar" method="post">




        <label for="usuario">Nombre:</label>
        <input type="text" id="usuario" name="usuario" required>
        <br>
        <label for="password">Usuario:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Ingresar</button>
    </form>
    <br>

</body>

</html>