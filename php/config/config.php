<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/php/views/es/inicio.php' 
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/php/views/es/quienesSomos.php'
        ],
        '/es/productos' => [
            'view'      => '/php/views/es/productos.php'
        ],
        '/es/contacto' => [
            'view'      => '/php/views/es/contacto.php'
        ],

        '/es/showroom' => [
            'view'      => '/php/views/templates.php'
        ],
        '/es/terminos-legales' => [
            'view'      => '/php/views/es/terminos.php'
        ],
        '/es/gracias' => [
            'view'      => '/php/views/es/gracias.php'
        ],
        
        '/es/productos/panaderia' => [
            'view'      => '/php/views/es/producto.php'
        ],
        '/es/productos/pasteleria' => [
            'view'      => '/php/views/es/producto.php'
        ],
        '/es/productos/torrijas' => [
            'view'      => '/php/views/es/producto.php'
        ],
        '/es/zona-admin' => [
            'view'      => '/php/views/es/zonaAdmin.php'
        ],
        '/es/logout' => [
            'view'      => '/php/views/es/logout.php'
        ],
        '/es/registro' => [
            'view'      => '/php/views/es/logup.php'
        ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/php/views/eu/inicio.php'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/php/views/eu/quienesSomos.php'
        ],
        '/eu/produktuak' => [
            'view'      => '/php/views/eu/productos.php'
        ],
        '/eu/kontaktua' => [
            'view'      => '/php/views/eu/contacto.php'
        ],
        '/eu/legezko-terminoak' => [
            'view'      => '/php/views/eu/terminos.php'
        ],
        '/eu/eskerrikasko' => [
            'view'      => '/php/views/eu/gracias.php'
        ],
        '/eu/produktuak/okindegia' => [
            'view'      => '/php/views/eu/producto.php'
        ],
        '/eu/produktuak/goxotegia' => [
            'view'      => '/php/views/eu/producto.php'
        ],
        '/eu/produktuak/torrijak' => [
            'view'      => '/php/views/eu/producto.php'
        ],
        '/eu/admin-gunea' => [
            'view'      => '/php/views/eu/zonaAdmin.php'
        ],
        '/eu/logout' => [
            'view'      => '/php/views/eu/logout.php'
        ],
        '/eu/erregistroa' => [
            'view'      => '/php/views/eu/logup.php'
        ],
    ]
];


