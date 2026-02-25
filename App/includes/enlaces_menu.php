<ul>
    <li><a href="<?=$_ENV['RUTA']?><?= $linkInicio ?>" title="Página de inicio"><?= $menuInicio ?></a></li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkQuienesSomos ?>" title="Tus panaderos y pasteleros en Aginaga"><?= $menuQuienesSomos ?></a></li>

    <li>
        <a href="<?=$_ENV['RUTA']?><?= $linkProductos ?>" title="Nuestros mejores panes, pasteles y torrijas"><?= $menuProductos ?></a>
        <ul class="sublista">
            <li><a href="<?=$_ENV['RUTA']?><?= $linkProductosPanaderia ?>" title="Los mejores panes"><?= $menuProductosPanaderia ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $linkProductosPasteleria ?>" title="Pastelería artesana"><?= $menuProductosPasteleria ?></a></li>
            <li><a href="<?=$_ENV['RUTA']?><?= $linkProductosTorrijas ?>" title="Las mejores torrijas de Gipuzkoa"><?= $menuProductosTorrijas ?></a></li>
        </ul>
    </li>

    <li><a href="<?=$_ENV['RUTA']?><?= $linkContacto ?>" title="Contacto con Panadería Aginaga"><?= $menuContacto ?></a></li>

    <?php
    if (isset($_SESSION['LOGIN']) && $_SESSION['LOGIN'] == "1") {
        // MOSTRARÉ EL CONTENIDO PRIVADO
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?= $linkZonaAdmin ?>" title="Zona privada"><?= $menuZonaAdmin ?></a></li>
    <li><a href="<?=$_ENV['RUTA']?><?= $linkLogout ?>" title="Salir"><?= $menuLogout ?></a></li>
    <?php
    } else {
    ?>
    <li><a href="<?=$_ENV['RUTA']?><?= $linkZonaAdmin ?>" title="Zona privada"><?= $menuLogin ?></a></li>
    <?php
    }
    ?>

</ul>
