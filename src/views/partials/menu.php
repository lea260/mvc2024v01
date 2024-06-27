<div class="navbar">
    <ul>
        <li><a href="<?= URL_BASE ?>home">Home</a></li>
        <li><a href="<?= URL_BASE ?>autos/nuevo">Crear Auto</a></li>
        <li><a href="<?= URL_BASE ?>autos/listar">Listar Autos</a></li>
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