import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'; // <== Tambahkan baris ini

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/SahalaTeam.css',
                'resources/js/SahalaTeam.js',
            ],
            refresh: true,
        }),
        tailwindcss(), // <== Tambahkan plugin Tailwind di sini
    ],
});
