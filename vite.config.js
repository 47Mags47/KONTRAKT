import { defineConfig, loadEnv } from 'vite';
import laravel from 'laravel-vite-plugin';

const env = loadEnv('all', process.cwd());

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.sass',
                'resources/sass/layout/admin.sass',
                'resources/sass/pages/index.sass',
                'resources/sass/pages/admin-maker-show.sass',
                'resources/sass/pages/components.sass',
                'resources/sass/pages/admin-item-show.sass',

                'resources/js/app.js',
                'resources/js/pages/index.js',
            ],
            refresh: true,
        }),
    ],

    css: {
        preprocessorOptions: {
            sass: {
                api: 'modern-compiler',
            }
        }
    },

    server: {
        host: true,
        port: 5173,
        strictPort: true,
        hmr: {
            host: env.VITE_ASSET_HOST,
            port: 5173,
        },
    },
});
