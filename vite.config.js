import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/**/*.css', 'resources/js/**/*.js'],
            refresh: true,
        }),
    ],
});
