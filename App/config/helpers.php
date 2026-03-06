<?php

//comienzo de sesión, tenemos que ejecutarlo antes de crear y usar las variables de sesión.
session_start();


// recibir el valor del parámetro, y comprobar si es vacío o no, y devolver true si es vacío y false en caso contrario.
function comprobarVacio($param1){
    
    if(empty($param1)){
        return true;
    }else{
        return false;
    }    
}

// Una función para comprobar si es mayor que un valor y menor que otro valor y devolver true si no cumple esa condición y false si la cumple.
function comprobarCaracteres($param1, $param2, $param3){
    $caracteres = strlen($param1);
    if($caracteres < $param2 || $caracteres > $param3){
        return true;
    }else{
        return false;
    }
}

// Función para comprobar si la extructura del correo recibidpo a través de lparam1, es acorde a la expresión regular. En caso de que sea diferente, revolveremos false y si es correcta, devolvemos true.
function comprobarEmailSintaxis($param1){
    $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';
    return preg_match($regex, $param1);
}



// Función para validar si un correo tiene la forma o estructura de un correo adecuada
// La función devuelve true si es correcto, o false si no coincide con la expresión regular con la que se compara.
function validar_email($valorRecibido) {    
    $regex = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/';

    return preg_match($regex, $valorRecibido);
    // Me devolverá false si hay error
    // Me devolverá true si NO hay error (si coincide la estructura )
}

// Función que se ejecuta cuando localizamos un error en el backend del formulario por no cumplimentar algún campo de forma correcta.
// La función obtiene todos los valores de los campos del formulario a través de los parámetros de entrada, y se encarga de redirigir a la página de contacto con los errores y los campos como query-param en la url.
function mensaje_error($lang, $ruta, $parametro01, $parametro02, $parametro03, $parametro04, $parametro05, $parametro06){    

    switch ($lang){
        case 'es':
            header("location:$ruta/es/contacto?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
        case 'eu':
            header("location:$ruta/eu/kontaktua?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
        default:
            header("location:$ruta/es/contacto?campo=$parametro01&error=$parametro02&nombre=$parametro03&tel=$parametro04&email=$parametro05&mensaje=$parametro06");
            die;
    }
    
}

function mensaje_error_login($ruta, $lang){
    switch ($lang){
        case 'es':
            header("location:$ruta/es/zona-admin?error=1");
            die;
        case 'eu':
            header("location:$ruta/eu/admin-gunea?error=1");
            die;
        default:
            header("location:$ruta/es/zona-admin?error=1");
            die;
    }
}

function mensaje_error_logup($ruta, $error, $lang){
    switch ($lang){
        case 'es':
            header("location:$ruta/es/registro?error=$error");
            die;
        case 'eu':
            header("location:$ruta/eu/erregistroa?error=$error");
            die;
        default:
            header("location:$ruta/es/registro?error=$error");
            die;
    }
}

// FUNCIÓN NATIVA PHP PARA CONSEGUIR EL AÑO, se usa en el footer
$anio=date('Y');


// MOSTRASR O NO ERRORES PHP, EN PRODUCCIÓN ESTO DEBERÍA ESTAR COMO 0, UNA VEZ SEPAMOS QUE TODO ESTÁ OK
ini_set('display_errors', $_ENV['DISPLAY_ERRORS']);

// Carga el manifest de Vite en producción para conocer los nombres finales
// de los archivos generados (hash en el nombre).
function vite_manifest() {
    static $manifest = null;
    if ($manifest !== null) {
        return $manifest;
    }

    // Ruta al manifest generado por "vite build".
    $manifestPath = __DIR__ . '/../../public/assets/.vite/manifest.json';
    if (!file_exists($manifestPath)) {
        $manifest = [];
        return $manifest;
    }

    // Leemos y parseamos el JSON del manifest.
    $contents = file_get_contents($manifestPath);
    if ($contents === false) {
        $manifest = [];
        return $manifest;
    }

    // Compatibilidad por si el archivo viene con BOM UTF-8.
    if (strncmp($contents, "\xEF\xBB\xBF", 3) === 0) {
        $contents = substr($contents, 3);
    }

    $decoded = json_decode($contents, true);
    $manifest = is_array($decoded) ? $decoded : [];

    return $manifest;
}

// Comprobamos si el servidor de Vite está activo en desarrollo.
// Esto nos permite decidir si servimos assets de dev o de build.
function vite_is_dev_server_running($devServerUrl) {
    static $isRunning = null;
    if ($isRunning !== null) {
        return $isRunning;
    }

    // Extraemos host/puerto del URL para intentar abrir un socket.
    $parsedUrl = parse_url($devServerUrl);
    if (!$parsedUrl || !isset($parsedUrl['host'])) {
        $isRunning = false;
        return $isRunning;
    }

    $host = $parsedUrl['host'];
    $port = $parsedUrl['port'] ?? 5173;

    $connection = @fsockopen($host, $port, $errno, $errstr, 0.3);
    if ($connection) {
        fclose($connection);
        $isRunning = true;
        return $isRunning;
    }

    $isRunning = false;
    return $isRunning;
}

// Genera las etiquetas <script> y <link> necesarias para una entrada de Vite.
// En dev, cargamos el JS desde el dev server (que también inyecta el CSS).
// En build, usamos el manifest para enlazar JS y CSS ya compilados.
function vite_tags_mode() {
    $mode = strtolower(trim((string)($_ENV['VITE_TAGS_MODE'] ?? 'auto')));
    if (!in_array($mode, ['auto', 'dev', 'build'], true)) {
        return 'auto';
    }

    return $mode;
}

function vite_resolve_manifest_asset(array $manifest, string $entry) {
    if (isset($manifest[$entry])) {
        return $manifest[$entry];
    }

    $entryBaseName = basename(str_replace('\\', '/', $entry));

    foreach ($manifest as $manifestAsset) {
        if (($manifestAsset['src'] ?? '') === $entry) {
            return $manifestAsset;
        }

        $srcBaseName = basename(str_replace('\\', '/', (string)($manifestAsset['src'] ?? '')));
        if ($srcBaseName !== '' && $srcBaseName === $entryBaseName) {
            return $manifestAsset;
        }
    }

    return null;
}

function vite_fallback_asset_from_filesystem(string $entry) {
    static $cache = [];
    if (isset($cache[$entry])) {
        return $cache[$entry];
    }

    $entryName = pathinfo($entry, PATHINFO_FILENAME);
    $assetsRoot = __DIR__ . '/../../public/assets';
    $jsCandidates = glob($assetsRoot . '/js/' . $entryName . '-*.js') ?: [];
    $cssCandidates = glob($assetsRoot . '/css/' . $entryName . '-*.css') ?: [];

    usort($jsCandidates, static fn($a, $b) => filemtime($b) <=> filemtime($a));
    usort($cssCandidates, static fn($a, $b) => filemtime($b) <=> filemtime($a));

    $asset = [
        'file' => !empty($jsCandidates) ? 'js/' . basename($jsCandidates[0]) : '',
        'css'  => !empty($cssCandidates) ? ['css/' . basename($cssCandidates[0])] : [],
    ];

    $cache[$entry] = $asset;
    return $asset;
}

function vite_tags($entry) {
    $entries = is_array($entry) ? $entry : [$entry];
    $devServer = $_ENV['VITE_DEV_SERVER'] ?? 'http://localhost:5173';
    $manifest = vite_manifest();

    // auto: local -> dev server, no local -> build.
    // dev: fuerza Vite dev server. build: fuerza bundles de build.
    $mode = vite_tags_mode();
    $httpHost = $_SERVER['HTTP_HOST'] ?? '';
    $hostOnly = explode(':', $httpHost)[0];
    $isLocalHost = in_array($hostOnly, ['localhost', '127.0.0.1'], true) || $httpHost === '';

    if ($mode === 'dev') {
        $useDevServer = vite_is_dev_server_running($devServer);
    } elseif ($mode === 'build') {
        $useDevServer = false;
    } else { // auto
        $useDevServer = $isLocalHost && vite_is_dev_server_running($devServer);
    }

    $tags = '';
    $shouldInjectClient = $useDevServer;
    static $clientInjected = false;

    foreach ($entries as $currentEntry) {
        if ($useDevServer) {
            if ($shouldInjectClient && !$clientInjected) {
                $tags .= '<script type="module" src="' . $devServer . '/@vite/client"></script>' . PHP_EOL;
                $clientInjected = true;
            }
            $tags .= '<script type="module" src="' . $devServer . '/' . $currentEntry . '"></script>' . PHP_EOL;
            continue;
        }

        $asset = vite_resolve_manifest_asset($manifest, $currentEntry);
        if ($asset === null) {
            $asset = vite_fallback_asset_from_filesystem($currentEntry);
        }

        $file = $asset['file'] ?? '';
        $cssFiles = $asset['css'] ?? [];
        if ($file === '' && empty($cssFiles)) {
            $safeEntry = htmlspecialchars($currentEntry, ENT_QUOTES, 'UTF-8');
            $tags .= '<!-- vite_tags: asset no encontrado para ' . $safeEntry . ' -->' . PHP_EOL;
            continue;
        }

        $baseUrl = rtrim($_ENV['RUTA'] ?? '', '/');

        if ($file !== '') {
            if (str_ends_with($file, '.css')) {
                $tags .= '<link rel="stylesheet" href="' . $baseUrl . '/assets/' . $file . '">' . PHP_EOL;
            } else {
                $tags .= '<script type="module" src="' . $baseUrl . '/assets/' . $file . '"></script>' . PHP_EOL;
            }
        }

        foreach ($cssFiles as $cssFile) {
            $tags .= '<link rel="stylesheet" href="' . $baseUrl . '/assets/' . $cssFile . '">' . PHP_EOL;
        }
    }

    return $tags;
}

// Devuelve el path base de la aplicación (sin dominio) para instalaciones en subcarpetas.
function base_path() {
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $base = str_replace('\\', '/', dirname($scriptName));
    $base = rtrim($base, '/');

    if ($base === '/' || $base === '.') {
        return '';
    }

    return $base;
}




// Función para saber las rutas homólogas a la ruta de origen en el resto de idiomas. Uso: ideal para los href en el selector de idioma de elementos comunes a todas las páginas
function getRutasEquivalentesPorIndice(string $url, array $arrayRutasGet): array
{
    // Inicializamos el resultado con todos los idiomas a null
    $resultado = [];
    foreach ($arrayRutasGet as $lang => $rutas) {
        $resultado[$lang] = null;
    }

    // 1) Detectar idioma origen (dónde existe la URL actual)
    $idiomaOrigen = null;
    foreach ($arrayRutasGet as $lang => $rutas) {
        if (array_key_exists($url, $rutas)) {
            $idiomaOrigen = $lang;
            break;
        }
    }

    // Si no existe la URL en ningún idioma, devolvemos nulls
    if ($idiomaOrigen === null) {
        return $resultado;
    }

    // 2) Sacar índice/posición de esa URL dentro del idioma origen
    $clavesOrigen = array_keys($arrayRutasGet[$idiomaOrigen]);
    $indice = array_search($url, $clavesOrigen, true);

    if ($indice === false) {
        return $resultado;
    }

    // 3) Recorrer todos los idiomas y coger la ruta homóloga por posición
    foreach ($arrayRutasGet as $lang => $rutas) {
        $clavesIdioma = array_keys($rutas);
        if (isset($clavesIdioma[$indice])) {
            $resultado[$lang] = $clavesIdioma[$indice];
        }
    }

    return $resultado;
}


// resource artForm02
function enviarRespuestaAsincrona($mensaje, $fallo, $param3){
   
    // creación de array asociativo
    $arrayRespuesta = array(
        'mensaje' => $mensaje,
        'fallo' => $fallo,
        'param3' => $param3
    );

    // crear un json del array
    $jsonDelArray = json_encode($arrayRespuesta); 

    // devolvemos el json (lo recogerá ajax en el responseText)
    echo $jsonDelArray; 
    die;
}
