<div class="navbar">
    <ul>
        <li><a href="<?= URL_BASE ?>home">Home</a></li>
        <?php $rol = $_SESSION['rol'] ?? 'usuario'; ?>
        <?php if ($rol == 'admin') : ?>
            <li><a href="<?= URL_BASE ?>autos/nuevo">Crear Auto</a></li>
        <?php endif; ?>
        <li><a href="<?= URL_BASE ?>autos/listar">Listar Autos</a></li>
        <li><a href="<?= URL_BASE ?>mail/enviar">mail</a></li>
        <?php $estaLog = $_SESSION['estaLog'] ?? false;
        $usuario = $_SESSION['usuario'] ?? "def";
        ?>
        <?php if ($estaLog) : ?>
            <li><a href="<?= URL_BASE ?>login/salir"><?= $usuario; ?></a></li>
        <?php else : ?>
            <li><a href="<?= URL_BASE ?>login/ingresar">Ingresar</a></li>
        <?php endif; ?>
    </ul>
</div>