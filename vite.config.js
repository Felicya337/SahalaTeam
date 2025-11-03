import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/SahalaTeam.css',
                'resources/js/SahalaTeam.js',
            ],
            refresh: true,
        }),
    ],
});
