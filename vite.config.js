import { defineConfig } from 'vite';
import fullReload from 'vite-plugin-full-reload';
import fs from 'node:fs';
import { resolve } from 'node:path';

// Entradas que Vite debe vigilar y compilar.
// En Vite vanilla, cada vista carga un JS que a su vez importa el SCSS.
// Así, en dev se sirve el CSS vía JS y en build se genera el CSS y se enlaza.
const entrypoints = [
  'src/js/404.js',
  'src/js/contacto.js',
  'src/js/gracias.js',
  'src/js/inicio.js',
  'src/js/producto.js',
  'src/js/productos.js',
  'src/js/quienesSomos.js',
  'src/js/terminos.js',
  'src/js/templates.js',
  'src/js/zonaAdmin.js',
];

function normalizeServedScssPublicAssetUrls(source) {
  return source
    .replace(/\.\.\/img\//g, '/assets/img/')
    .replace(/\.\.\/fonts\//g, '/assets/fonts/');
}

export default defineConfig(({ command }) => {
  // "serve" cuando hacemos `vite` (dev) y "build" cuando hacemos `vite build`.
  const isDev = command === 'serve';

  return {
    // En dev usamos base "/" para que los módulos se sirvan desde la raíz.
    // En build apuntamos a "/assets/" porque allí se publican los bundles.
    base: isDev ? '/' : '/assets/',
    // Mantenemos /public disponible en dev para servir imÃ¡genes y fuentes.
    // Forzamos recarga completa cuando cambian archivos PHP (no hay HMR en PHP).
    plugins: [
      {
        name: 'rewrite-served-scss-public-asset-urls',
        apply: 'serve',
        enforce: 'post',
        transform(source, id) {
          if (!id.endsWith('.scss') || !source.includes('__vite__css')) {
            return null;
          }

          const normalizedSource = normalizeServedScssPublicAssetUrls(source);
          if (normalizedSource === source) {
            return null;
          }

          return {
            code: normalizedSource,
            map: null,
          };
        },
      },
      {
        name: 'clean-public-assets',
        apply: 'build',
        configResolved(config) {
          this.projectRoot = config.root;
        },
        buildStart() {
          const root = this.projectRoot || process.cwd();
          const folders = ['js', 'css'].map((folder) =>
            resolve(root, 'public/assets', folder),
          );

          folders.forEach((folderPath) => {
            fs.mkdirSync(folderPath, { recursive: true });
            const entries = fs.readdirSync(folderPath);
            entries.forEach((entryName) => {
              const targetPath = resolve(folderPath, entryName);
              const stats = fs.lstatSync(targetPath);
              if (stats.isDirectory()) {
                fs.rmSync(targetPath, { recursive: true, force: true });
              } else {
                fs.unlinkSync(targetPath);
              }
            });
          });
        },
      },
      fullReload(['App/**/*.php']),
    ],
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
      // Evita copiar /public dentro de /public/assets (outDir estÃ¡ dentro de public).
      copyPublicDir: false,
      // Carpeta de salida del build.
      outDir: 'public/assets',
      // Evitamos borrar toda la carpeta porque ahí viven imágenes y fuentes.
      emptyOutDir: false,
      // Guardamos JS y CSS en carpetas específicas dentro de "public/assets".
      assetsDir: '',
      rollupOptions: {
        // Convertimos la lista de entradas en un objeto compatible con Rollup.
        // Cada key es el path lógico y el value es la ruta absoluta del archivo.
        input: entrypoints.reduce((entries, entry) => {
          const key = entry.replace(/^src\/js\//, '').replace(/\.js$/, '');
          entries[key] = resolve(__dirname, entry);
          return entries;
        }, {}),
        output: {
          entryFileNames: 'js/[name]-[hash].js',
          chunkFileNames: 'js/[name]-[hash].js',
          assetFileNames: (assetInfo) => {
            if (assetInfo.name && assetInfo.name.endsWith('.css')) {
              return 'css/[name]-[hash][extname]';
            }

            return 'assets/[name]-[hash][extname]';
          },
        },
      },
    },
  };
});
