<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/inicio.js'); ?>

    <!-- Url de esta vista -->
    <link rel="canonical" href="<?=$_ENV['RUTA']?>/es">

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
        <h1><?= $mih1 ?></h1>
        <div>
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="">
        </div>
        <a href="<?=$_ENV['RUTA']?>/es/contacto" class="boton"><?= $hero_cta_pedido ?></a>
    </header>

    <main>
        <!-- SECCIÓN PRESENTACIÓN -->
        <section class="sect01">
            <div class="h2Especial">
                <span></span>
                <h2><?= $presentacion_titulo ?></h2>
            </div>

            <article>
                <!-- hijo 1 -->
                <div>
                    <h3><?= $presentacion_subtitulo ?></h3>
                    <p><?= $presentacion_texto ?></p>
                    <span></span>
                    <div class="cards">
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/people-outline.svg" alt="">
                            <h4><?= $presentacion_card_equipo_titulo ?></h4>
                            <p><?= $presentacion_card_equipo_texto ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="moduloBoton01">
                                <span><?= $presentacion_card_equipo_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                        <div class="card">
                            <img src="<?=$_ENV['RUTA']?>/assets/img/system/star-outline.svg" alt="">
                            <h4><?= $presentacion_card_calidad_titulo ?></h4>
                            <p><?= $presentacion_card_calidad_texto ?></p>
                            <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton01">
                                <span><?= $presentacion_card_calidad_cta ?></span>
                                <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                            </a>
                        </div>
                    </div>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" class="moduloBoton02">
                        <span><?= $presentacion_cta_reserva ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $presentacion_cta_reserva_icon_texto ?>" title="<?= $presentacion_cta_reserva_icon_texto ?>">
                    </a>
                </div>
                <!-- hijo 2 -->
                <div>
                    <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderia-pasteleria-aginaga-1500.avif" alt="" title="">
                </div>
            </article>


        </section>

        <!-- SECCIÓN SOBRE NOSOTROS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $sobre_nosotros_titulo ?></h2>
            </div>
            <!-- Artículo 03 -->
            <article class="art03">
                <h3><?= $sobre_nosotros_art03_titulo ?></h3>

                <p><?= $sobre_nosotros_art03_texto_1 ?></p>

                <p><?= $sobre_nosotros_art03_texto_2 ?></p>

                <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/panaderas-profesionales-1500.avif" alt="<?= $sobre_nosotros_art03_img_alt ?>" title="<?= $sobre_nosotros_art03_img_title ?>">
            </article>

            <!-- artículo 05 -->
            <article class="art05">
                <h3><?= $sobre_nosotros_art05_titulo ?></h3>
                <p><?= $sobre_nosotros_art05_texto_1 ?></p>
                <p><?= $sobre_nosotros_art05_texto_2 ?></p>
                <a href="<?=$_ENV['RUTA']?>/es/sobre-nosotros" class="boton"><?= $sobre_nosotros_art05_cta ?></a>
            </article>

            <!-- artículo 06 -->
            <article class="art06">
                <div>
                    <h3><?= $sobre_nosotros_art06_titulo ?></h3>
                    <p><?= $sobre_nosotros_art06_texto_1 ?></p>
                    <p><?= $sobre_nosotros_art06_texto_2 ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/contacto" title="" class="boton"><?= $sobre_nosotros_art06_cta ?></a>
                </div>
            </article>

        </section>

        <!-- SECCIÓN PRODUCTOS -->
        <section>
            <div class="h2Especial">
                <span></span>
                <h2><?= $productos_titulo ?></h2>
            </div>

            <!-- Artículo 02-bis -->
            <article class="art02-bis">
                <div class="textos">
                    <h3><?= $productos_intro_titulo ?></h3>
                    <p><?= $productos_intro_texto ?></p>
                    <a href="<?=$_ENV['RUTA']?>/es/productos" class="moduloBoton02">
                        <span><?= $productos_intro_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="<?= $productos_intro_cta_icon_alt ?>" title="<?= $productos_intro_cta_icon_title ?>">
                    </a>
                </div>

                <div class="imagenes">
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPanes" title="<?= $productos_panaderia_link_title ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-panes-1200.avif" alt="<?= $productos_panaderia_img_texto ?>" title="<?= $productos_panaderia_img_texto ?>">
                        <h4><?= $productos_panaderia_label ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoPasteles" title="<?= $productos_pasteleria_link_title ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/amplio-surtido-pasteles-1200.avif" alt="<?= $productos_pasteleria_img_texto ?>" title="<?= $productos_pasteleria_img_texto ?>">
                        <h4><?= $productos_pasteleria_label ?></h4>
                    </a>
                    <a href="<?=$_ENV['RUTA']?>/es/productos#hitoTorrijas" title="<?= $productos_torrijas_link_title ?>">
                        <img src="<?=$_ENV['RUTA']?>/assets/img/vistas/inicio/las-mejores-torrijas-de-gipuzkoa1200.avif" alt="<?= $productos_torrijas_img_texto ?>" title="<?= $productos_torrijas_img_texto ?>">
                        <h4><?= $productos_torrijas_label ?></h4>
                    </a>
                </div>
            </article>

            <!-- Artículo 01 -->
            <article class="art01">
                <img src="<?= $_ENV['RUTA']?>/assets/img/vistas/productos/productos-masa-madre-1800.avif" alt="">
                <div>
                    <h3><?= $productos_art01_titulo ?></h3>
                    <p><?= $productos_art01_texto ?></p>
                    <!-- <a href="" class="boton">CTA</a> -->
                    <a href="" class="moduloBoton02">
                        <span><?= $productos_art01_cta ?></span>
                        <img src="<?=$_ENV['RUTA']?>/assets/img/system/arrow-forward-outline.svg" alt="" title="">
                    </a>
                </div>
            </article>


        </section>

    </main>

    <!-- FOOTER -->
    <?php include $appRoot . '/includes/footer.php'?>




</body>
</html>