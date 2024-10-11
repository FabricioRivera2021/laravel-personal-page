import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        react(), // Place React first
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/js/react/src/main.jsx'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': './resources/js/react/src',
        },
    },
});
