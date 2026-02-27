<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    
    <!-- linko el css que le corresponde a esta vista -->
    <?php echo vite_tags('src/js/gracias.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?><?= $link_canonical ?>">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include $appRoot . '/includes/metadatos_globales.php'
    ?>

</head>
<body>

    <?php
    // Elementos globales dentro del body: script de tag manager
    include $appRoot . '/includes/body_global.php'
    ?>

    <!-- NAV -->
    <?php
    // es código php
    include $appRoot . '/includes/nav.php'
    // ?>

    <?php
    if(isset($_GET['nombre'])){
        $nombre = $_GET['nombre'];
    }
    ?>

    <!-- HERO01 -->
    <header>        
        <h1><?= $hero_h1 ?><?php if(isset($_GET['nombre'])){ echo ' ' . $nombre;} ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $hero_logo_alt ?>" title="<?= $hero_logo_title ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $linkInicio ?>" class="boton" title="<?= $hero_cta_title ?>"><?= $hero_cta ?></a>     
    </header>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/footer.php'
    ?>

</body>
</html>
