<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/views/quienesSomos.js'); ?>

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
    <?php include $appRoot . '/includes/nav.php' ?>

    <!-- HERO01 -->
    <header>
        <h1><?= $hero_h1 ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $hero_logo_alt ?>" title="<?= $hero_logo_title ?>">
        </div>
    </header>

    <main>
        <!-- Equipo humano -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $equipo_h2 ?></h2>
            </div>

            <!-- PRESENTACIÓN DE QUIENES SOMOS -->
            <article class="art05">
                <h3><?= $presentacion_h3 ?></h3>
                <p><?= $presentacion_p1 ?></p>
                <p><?= $presentacion_p2 ?></p>
                <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?>" class="boton" title="<?= $presentacion_cta_title ?>"><?= $presentacion_cta ?></a>
            </article>

            <!-- TRATO DISTINGUIDO Y PERSONAL -->
            <article class="art03">

                <h3><?= $trato_h3 ?></h3>

                <p><?= $trato_p1 ?></p>

                <p><?= $trato_p2 ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/equipo-de-panaderas-y-panaderos-1800.avif" alt="<?= $trato_img_alt ?>" title="<?= $trato_img_title ?>">

            </article>

            <!-- LOS TRABAJADORES Y TRABAJADORAS -->
            <article class="art04">
                <h3><?= $equipo_fichas_h3 ?></h3>
                <span class="ralla"></span>
                <div class="contenedor-fichas">
                    <div class="ficha">
                        <h4><?= $ficha_1_nombre ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-01-1200.avif" alt="<?= $ficha_1_img_alt ?>" title="<?= $ficha_1_img_title ?>">
                        <p><?= $ficha_1_texto ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha_2_nombre ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-03-1200.avif" alt="<?= $ficha_2_img_alt ?>" title="<?= $ficha_2_img_title ?>">
                        <p><?= $ficha_2_texto ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha_3_nombre ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleado-02-1200.avif" alt="<?= $ficha_3_img_alt ?>" title="<?= $ficha_3_img_title ?>">
                        <p><?= $ficha_3_texto ?></p>
                        <span class="ralla"></span>
                    </div>

                    <div class="ficha">
                        <h4><?= $ficha_4_nombre ?></h4>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/quienes-somos/empleada-04-1200.avif" alt="<?= $ficha_4_img_alt ?>" title="<?= $ficha_4_img_title ?>">
                        <p><?= $ficha_4_texto ?></p>
                        <span class="ralla"></span>
                    </div>
                </div>
            </article>
        </section>

        <!-- Historia y valores de la panadería -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $historia_h2 ?></h2>
            </div>
            <article>
                <!-- CERCANÍA Y TRADICIÓN -->
                <div>
                    <h3><?= $historia_h3 ?></h3>
                    <p><?= $historia_p1 ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star.svg" alt="<?= $historia_card_1_icon_alt ?>" title="<?= $historia_card_1_icon_title ?>">
                            <h4><?= $historia_card_1_h4 ?></h4>
                            <p><?= $historia_card_1_p ?></p>

                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/ribbon.svg" alt="<?= $historia_card_2_icon_alt ?>" title="<?= $historia_card_2_icon_title ?>">
                            <h4><?= $historia_card_2_h4 ?></h4>
                            <p><?= $historia_card_2_p ?></p>
                            <a href="<?=$_ENV['RUTA']?><?= $linkProductos ?>" class="moduloBoton01">
                                <span><?= $historia_card_2_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?><?= $linkContacto ?>" class="moduloBoton02">
                        <span><?= $historia_cta_contacto ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $historia_cta_icon_alt ?>" title="">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-en-aginaga-1500.avif" alt="<?= $historia_img_alt ?>" title="<?= $historia_img_title ?>">
                </div>
            </article>
        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>
</body>
</html>
