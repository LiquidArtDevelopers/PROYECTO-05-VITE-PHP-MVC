<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $seo_title ?></title>
    <meta name="description" content="<?= $seo_description ?>">
    <?php echo vite_tags('src/js/terminos.js'); ?>

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
    ?>
    
    <!-- HERO01 -->
    <header>        
        <h1><?= $hero_h1 ?></h1>
        <div>            
            <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="<?= $hero_logo_alt ?>" title="<?= $hero_logo_title ?>">
        </div>
        <a href="<?=$_ENV['RUTA']?><?= $linkInicio ?>" class="boton" title="<?= $hero_cta_title ?>"><?= $hero_cta ?></a>     
    </header>

    <?php
    // Zona de variables para personalizar el texto legal
    $razonSocial = $legal_razon_social;
    $correo = $legal_correo;
    $cif = $legal_cif;
    $direccion = $legal_direccion;
    ?>

    <main>
        <section>
            <div class="hito" id="legalZona"></div>
            <h2><?= $legal_h2 ?></h2>

            <article id="identificacion-titular">
                <h3><?= $legal_identificacion_h3 ?></h3>
                <p><?= $legal_identificacion_p ?></p>
                <ul>
                    <li><strong><?= $legal_identificacion_label_razon_social ?></strong> <?= $razonSocial ?></li>
                    <li><strong><?= $legal_identificacion_label_cif ?></strong> <?= $cif ?></li>
                    <li><strong><?= $legal_identificacion_label_domicilio ?></strong> <?= $direccion ?></li>
                    <li><strong><?= $legal_identificacion_label_correo ?></strong> <a href="mailto:<?= $correo ?>"><?= $correo ?></a></li>
                </ul>
            </article>

            <article id="objeto-sitio">
                <h3><?= $legal_objeto_h3 ?></h3>
                <p><?= sprintf($legal_objeto_p, $razonSocial) ?></p>
            </article>

            <article id="condiciones-uso">
                <h3><?= $legal_condiciones_h3 ?></h3>
                <p><?= sprintf($legal_condiciones_p, $razonSocial) ?></p>
            </article>

            <article id="responsabilidad">
                <h3><?= $legal_responsabilidad_h3 ?></h3>
                <p><?= sprintf($legal_responsabilidad_p, $razonSocial) ?></p>
            </article>

            <article id="propiedad-intelectual">
                <h3><?= $legal_propiedad_h3 ?></h3>
                <p><?= sprintf($legal_propiedad_p, $razonSocial) ?></p>
            </article>

            <article id="enlaces-terceros">
                <h3><?= $legal_enlaces_h3 ?></h3>
                <p><?= sprintf($legal_enlaces_p, $razonSocial) ?></p>
            </article>

            <article id="ley-y-jurisdiccion">
                <h3><?= $legal_jurisdiccion_h3 ?></h3>
                <p><?= $legal_jurisdiccion_p ?></p>
            </article>
        </section>

        <section>
            <div class="hito" id="cookiesZona"></div>
            <h2><?= $cookies_h2 ?></h2>

            <article id="que-son-cookies">
                <h3><?= $cookies_que_son_h3 ?></h3>
                <p><?= $cookies_que_son_p ?></p>
            </article>

            <article id="cookies-utilizadas">
                <h3><?= $cookies_utilizadas_h3 ?></h3>
                <ul>
                    <li><?= $cookies_utilizadas_li_1_html ?></li>
                    <li><?= $cookies_utilizadas_li_2_html ?></li>
                    <li><?= sprintf($cookies_utilizadas_li_3_html, $link_config_cookies) ?></li>
                </ul>
            </article>

            <article id="base-juridica-cookies">
                <h3><?= $cookies_base_juridica_h3 ?></h3>
                <p><?= sprintf($cookies_base_juridica_p_html, $link_config_cookies) ?></p>
            </article>

            <article id="transferencias-internacionales-cookies">
                <h3><?= $cookies_transferencias_h3 ?></h3>
                <p><?= $cookies_transferencias_p ?></p>
            </article>

            <article id="gestionar-cookies-navegador">
                <h3><?= $cookies_navegador_h3 ?></h3>
                <p><?= $cookies_navegador_p1 ?></p>
                <ul>
                    <li><a href="<?= $link_chrome_cookies ?>" target="_blank" rel="noopener"><?= $cookies_navegador_link_chrome ?></a></li>
                    <li><a href="<?= $link_firefox_cookies ?>" target="_blank" rel="noopener"><?= $cookies_navegador_link_firefox ?></a></li>
                    <li><a href="<?= $link_safari_cookies ?>" target="_blank" rel="noopener"><?= $cookies_navegador_link_safari ?></a></li>
                    <li><a href="<?= $link_edge_cookies ?>" target="_blank" rel="noopener"><?= $cookies_navegador_link_edge ?></a></li>
                </ul>
                <p><?= $cookies_navegador_p2 ?></p>
            </article>

            <article id="config-cookies">
                <h3><?= $cookies_config_h3 ?></h3>
                <p><?= $cookies_config_p ?></p>
                <div class="cookies-preferences-container" aria-live="polite"></div>
            </article>

            <article id="actualizaciones-cookies">
                <h3><?= $cookies_actualizaciones_h3 ?></h3>
                <p><?= sprintf($cookies_actualizaciones_p, $razonSocial) ?></p>
            </article>
        </section>
        
        <section>
            <div class="hito" id="privacidadZona"></div>
            <h2><?= $privacidad_h2 ?></h2>

            <article id="responsable-tratamiento">
                <h3><?= $privacidad_responsable_h3 ?></h3>
                <p><?= sprintf($privacidad_responsable_p_html, $razonSocial, $cif, $direccion, $correo, $correo) ?></p>
            </article>

            <article id="datos-procedencia">
                <h3><?= $privacidad_datos_h3 ?></h3>
                <p><?= sprintf($privacidad_datos_p_html, $link_cookies_zona) ?></p>
            </article>

            <article id="finalidades-tratamiento">
                <h3><?= $privacidad_finalidades_h3 ?></h3>
                <ul>
                    <li><?= $privacidad_finalidades_li_1_html ?></li>
                    <li><?= $privacidad_finalidades_li_2_html ?></li>
                    <li><?= $privacidad_finalidades_li_3_html ?></li>
                    <li><?= $privacidad_finalidades_li_4_html ?></li>
                    <li><?= $privacidad_finalidades_li_5_html ?></li>
                    <li><?= $privacidad_finalidades_li_6_html ?></li>
                </ul>
            </article>

            <article id="bases-juridicas">
                <h3><?= $privacidad_bases_h3 ?></h3>
                <ul>
                    <li><?= $privacidad_bases_li_1_html ?></li>
                    <li><?= $privacidad_bases_li_2_html ?></li>
                    <li><?= $privacidad_bases_li_3_html ?></li>
                    <li><?= $privacidad_bases_li_4_html ?></li>
                </ul>
            </article>

            <article id="plazos-conservacion">
                <h3><?= $privacidad_plazos_h3 ?></h3>
                <ul>
                    <li><?= $privacidad_plazos_li_1_html ?></li>
                    <li><?= $privacidad_plazos_li_2_html ?></li>
                    <li><?= $privacidad_plazos_li_3_html ?></li>
                    <li><?= $privacidad_plazos_li_4_html ?></li>
                </ul>
            </article>

            <article id="destinatarios">
                <h3><?= $privacidad_destinatarios_h3 ?></h3>
                <p><?= $privacidad_destinatarios_p ?></p>
            </article>

            <article id="transferencias-internacionales">
                <h3><?= $privacidad_transferencias_h3 ?></h3>
                <p><?= $privacidad_transferencias_p ?></p>
            </article>

            <article id="derechos-personas">
                <h3><?= $privacidad_derechos_h3 ?></h3>
                <p><?= sprintf($privacidad_derechos_p_html, $correo, $correo, $link_aepd) ?></p>
            </article>

            <article id="menores">
                <h3><?= $privacidad_menores_h3 ?></h3>
                <p><?= $privacidad_menores_p ?></p>
            </article>

            <article id="decisiones-automatizadas">
                <h3><?= $privacidad_decisiones_h3 ?></h3>
                <p><?= $privacidad_decisiones_p ?></p>
            </article>

            <article id="seguridad">
                <h3><?= $privacidad_seguridad_h3 ?></h3>
                <p><?= $privacidad_seguridad_p ?></p>
            </article>

            <article id="actualizaciones-privacidad">
                <h3><?= $privacidad_actualizaciones_h3 ?></h3>
                <p><?= $privacidad_actualizaciones_p ?></p>
            </article>
        </section>
    </main>

    <!-- FOOTER -->
    <?php
    include $appRoot . '/includes/footer.php'
    ?>
</body>
</html>
