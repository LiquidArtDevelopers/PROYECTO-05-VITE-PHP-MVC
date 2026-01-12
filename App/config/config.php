<?php

// Array de idiomas permitidos
$langs = ['es', 'eu'];

//Array asociativo (3 nieveles) para determinar las url permitidas y asociarles el recurso de la vista que corresponda
$arrayRutasGet = [
    'es' => [
        '/es' => [
            'view'      => '/App/views/es/inicio.php' 
        ],
        '/es/sobre-nosotros' => [
            'view'      => '/App/views/es/quienesSomos.php'
        ],
        '/es/productos' => [
            'view'      => '/App/views/es/productos.php'
        ],
        '/es/contacto' => [
            'view'      => '/App/views/es/contacto.php'
        ],

        '/es/showroom' => [
            'view'      => '/App/views/templates.php'
        ],
        '/es/terminos-legales' => [
            'view'      => '/App/views/es/terminos.php'
        ],
        '/es/gracias' => [
            'view'      => '/App/views/es/gracias.php'
        ],
        
        '/es/productos/panaderia' => [
            'view'      => '/App/views/es/producto.php'
        ],
        '/es/productos/pasteleria' => [
            'view'      => '/App/views/es/producto.php'
        ],
        '/es/productos/torrijas' => [
            'view'      => '/App/views/es/producto.php'
        ],
        '/es/zona-admin' => [
            'view'      => '/App/views/es/zonaAdmin.php'
        ],
        '/es/logout' => [
            'view'      => '/App/views/es/logout.php'
        ],
        '/es/registro' => [
            'view'      => '/App/views/es/logup.php'
        ],
    ],
    'eu' => [
        '/eu' => [
            'view'      => '/App/views/eu/inicio.php'
        ],
        '/eu/guri-buruz' => [
            'view'      => '/App/views/eu/quienesSomos.php'
        ],
        '/eu/produktuak' => [
            'view'      => '/App/views/eu/productos.php'
        ],
        '/eu/kontaktua' => [
            'view'      => '/App/views/eu/contacto.php'
        ],
        '/eu/legezko-terminoak' => [
            'view'      => '/App/views/eu/terminos.php'
        ],
        '/eu/eskerrikasko' => [
            'view'      => '/App/views/eu/gracias.php'
        ],
        '/eu/produktuak/okindegia' => [
            'view'      => '/App/views/eu/producto.php'
        ],
        '/eu/produktuak/goxotegia' => [
            'view'      => '/App/views/eu/producto.php'
        ],
        '/eu/produktuak/torrijak' => [
            'view'      => '/App/views/eu/producto.php'
        ],
        '/eu/admin-gunea' => [
            'view'      => '/App/views/eu/zonaAdmin.php'
        ],
        '/eu/logout' => [
            'view'      => '/App/views/eu/logout.php'
        ],
        '/eu/erregistroa' => [
            'view'      => '/App/views/eu/logup.php'
        ],
    ]
];

