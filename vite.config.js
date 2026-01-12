import { defineConfig } from 'vite';
import fullReload from 'vite-plugin-full-reload';
import { resolve } from 'node:path';

// Entradas que Vite debe vigilar y compilar.
// En Vite vanilla, cada vista carga un JS que a su vez importa el SCSS.
// Así, en dev se sirve el CSS vía JS y en build se genera el CSS y se enlaza.
const entrypoints = [
  'src/js/views/404.js',
  'src/js/views/contacto.js',
  'src/js/views/gracias.js',
  'src/js/views/inicio.js',
  'src/js/views/producto.js',
  'src/js/views/productos.js',
  'src/js/views/quienesSomos.js',
  'src/js/views/terminos.js',
  'src/js/views/templates.js',
  'src/js/views/zonaAdmin.js',
];

export default defineConfig(({ command }) => {
  // "serve" cuando hacemos `vite` (dev) y "build" cuando hacemos `vite build`.
  const isDev = command === 'serve';

  return {
    // En dev usamos base "/" para que los módulos se sirvan desde la raíz.
    // En build apuntamos a "/assets/" porque allí se publican los bundles.
    base: isDev ? '/' : '/assets/',
    // Forzamos recarga completa cuando cambian archivos PHP (no hay HMR en PHP).
    plugins: [fullReload(['App/**/*.php'])],
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
      outDir: 'public/assets',
      // Limpiamos la carpeta antes de cada build.
      emptyOutDir: true,
      // Dejamos los assets en la raíz del outDir para controlar las carpetas finales.
      assetsDir: '',
      rollupOptions: {
        // Convertimos la lista de entradas en un objeto compatible con Rollup.
        // Cada key es el path lógico y el value es la ruta absoluta del archivo.
        input: entrypoints.reduce((entries, entry) => {
          entries[entry] = resolve(__dirname, entry);
          return entries;
        }, {}),
        output: {
          entryFileNames: 'js/[name]-[hash].js',
          chunkFileNames: 'js/[name]-[hash].js',
          assetFileNames: (assetInfo) => {
            const ext = assetInfo.name ? assetInfo.name.split('.').pop() : '';
            if (ext === 'css') {
              return 'css/[name]-[hash][extname]';
            }
            if (['png', 'jpg', 'jpeg', 'gif', 'svg', 'webp', 'avif'].includes(ext)) {
              return 'img/[name]-[hash][extname]';
            }
            if (['woff', 'woff2', 'ttf', 'otf', 'eot'].includes(ext)) {
              return 'fonts/[name]-[hash][extname]';
            }
            return '[name]-[hash][extname]';
          },
        },
      },
    },
  };
});
