import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/scss/index.scss', 'resources/scss/experiencia.scss', 'resources/scss/bucketlist.scss', 'resources/scss/solicitud.scss', 'resources/scss/artesanos.scss',  'resources/scss/detallebucket.scss', 'resources/scss/contacto.scss',  'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
