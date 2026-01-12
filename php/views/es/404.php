<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 Página no encontrada</title>
    <meta name="description" content="Página no encontrada. Error 404">
    <link rel="stylesheet" href="<?=$_ENV['RUTA']?>/assets/css/404.min.css">

    <!-- Indexación y autoridad-->
    <meta name="robots" data-lang="robots" content="nofollow, noindex">
    <meta name="referrer" content="origin">

    <?php
    // Metadatos globales
    include './php/includes/es/metadatos_globales.php'
    ?>

</head>
<body>
    <?php
    // Elementos globales dentro del body: script de tag manager
    include './php/includes/es/body_global.php'
    ?>
    <main>
        <img src="<?=$_ENV['RUTA']?>/assets/img/logos/panaderia-aginaga-logo.svg" alt="Panadería Aginaga" title="Panadería Aginaga">
        <h1>404 - Página no encontrada</h1>
        <a href="<?=$_ENV['RUTA']?>/es" class="boton">Ir a inicio</a>
    </main>

    <!-- FOOTER -->
    <?php include './php/includes/es/footer.php'?>
</body>
</html>