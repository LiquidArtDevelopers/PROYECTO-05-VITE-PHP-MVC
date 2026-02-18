# Proyecto 05 - Vite + PHP MVC

## Requisitos
- PHP
- Composer
- Node.js y npm

## Instalación
1. `composer install`
2. `npm install`

## Desarrollo
- `npm run start`: levanta Vite (`http://localhost:5173`) y el servidor PHP (`http://localhost:3000`) en paralelo.
- `npm run dev`: solo Vite en `http://localhost:5173`.
- `php -S localhost:3000 -t public public/router.php`: solo PHP en `http://localhost:3000`.

## Build
- `npm run build`: genera los assets en `public/assets`.
