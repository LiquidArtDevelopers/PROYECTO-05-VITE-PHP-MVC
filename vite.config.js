import { defineConfig } from 'vite';
import fullReload from 'vite-plugin-full-reload';
import { resolve } from 'node:path';

// Entradas que Vite debe vigilar y compilar.
// En Vite vanilla, cada vista carga un JS que a su vez importa el SCSS.
// Así, en dev se sirve el CSS vía JS y en build se genera el CSS y se enlaza.
const entrypoints = [
  'assets/js/views/404.js',
  'assets/js/views/contacto.js',
  'assets/js/views/gracias.js',
  'assets/js/views/inicio.js',
  'assets/js/views/producto.js',
  'assets/js/views/productos.js',
  'assets/js/views/quienesSomos.js',
  'assets/js/views/terminos.js',
  'assets/js/views/templates.js',
  'assets/js/views/zonaAdmin.js',
];

export default defineConfig(({ command }) => {
  // "serve" cuando hacemos `vite` (dev) y "build" cuando hacemos `vite build`.
  const isDev = command === 'serve';

  return {
    // En dev usamos base "/" para que los módulos se sirvan desde la raíz.
    // En build apuntamos a "/assets/dist/" porque allí se publican los bundles.
    base: isDev ? '/' : '/assets/dist/',
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
  };
});
