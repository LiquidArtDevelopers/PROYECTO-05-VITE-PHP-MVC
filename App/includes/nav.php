<input type="checkbox" name="toggle" id="chec" >
<label for="chec" class="contenedor_spam">
    <span ></span>
    <span></span>
    <span></span>
</label>

<nav>
    <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Logotipo Panadería Aginaga" title="Panadería Aginaga" width="100" height="40">

    <?php
    // enlaces de la web
    include $appRoot . '/includes/enlaces_menu.php'
    ?>

    <ul class="idiomas">
        <li><a href="<?=$_ENV['RUTA']?><?= $urlMultilangs['eu'] ?>">EU</a></li>
        <li><a href="<?=$_ENV['RUTA']?><?= $urlMultilangs['es'] ?>">ES</a></li>
    </ul>
</nav>
