<?php

//comienzo de sesión, tenemos que ejecutarlo antes de crear y usar las variables de sesión.
session_start();

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