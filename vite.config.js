import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/legacy.css', 'resources/js/app.js', 'resources/js/legacy.js'],
            refresh: true,
        }),
    ],
});
