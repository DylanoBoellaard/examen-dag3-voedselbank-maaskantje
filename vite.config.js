import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/scss/button.scss' , 'resources/scss/overzicht.scss', 'resources/img/wijzig.scss'],
            refresh: true,
        }),
    ],
});
