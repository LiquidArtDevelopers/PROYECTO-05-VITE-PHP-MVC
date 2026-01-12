import { defineConfig } from 'vite';
import fullReload from 'vite-plugin-full-reload';
import { resolve } from 'node:path';

// Entradas que Vite debe vigilar y compilar.
// Incluimos cada SCSS por vista y el JS puntual que existe en el proyecto.
const entrypoints = [
  'assets/scss/404.scss',
  'assets/scss/contacto.scss',
  'assets/scss/gracias.scss',
  'assets/scss/inicio.scss',
  'assets/scss/producto.scss',
  'assets/scss/productos.scss',
  'assets/scss/quienesSomos.scss',
  'assets/scss/terminos.scss',
  'assets/scss/templates.scss',
  'assets/scss/zonaAdmin.scss',
  'assets/js/contacto.js',
];

export default defineConfig({
  // Base pública desde la que se sirven los assets compilados en producción.
  // Debe coincidir con la ruta donde publicamos "assets/dist".
  base: '/assets/dist/',
  // Forzamos recarga completa cuando cambian archivos PHP (no hay HMR en PHP).
  plugins: [fullReload(['php/**/*.php'])],
  server: {
    // "host: true" permite acceder desde la red local (útil en móviles).
    host: true,
    // Puerto del servidor Vite en desarrollo.
    port: 5173,
    // Si el puerto está ocupado, falla en vez de buscar otro.
    strictPort: true,
  },
  build: {
    // Generamos manifest para que PHP pueda saber los nombres finales de los assets.
    manifest: true,
    // Carpeta de salida del build.
    outDir: 'assets/dist',
    // Limpiamos la carpeta antes de cada build.
    emptyOutDir: true,
    rollupOptions: {
      // Convertimos la lista de entradas en un objeto compatible con Rollup.
      // Cada key es el path lógico y el value es la ruta absoluta del archivo.
      input: entrypoints.reduce((entries, entry) => {
        entries[entry] = resolve(__dirname, entry);
        return entries;
      }, {}),
    },
  },
});
