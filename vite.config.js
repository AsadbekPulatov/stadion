import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            clientPort: 5173,
            host: "localhost",
            protocol: "ws",
        },
        port: 5173,
        host: true,
        watch: {
            usePolling: true
        }
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
