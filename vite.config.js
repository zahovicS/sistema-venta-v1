import { defineConfig } from 'vite';
import leaf from '@leafphp/vite-plugin';

export default defineConfig({
    plugins: [
        leaf({
            input: [
                'resources/css/custom.css',
                'resources/js/app.js',
                'resources/js/stores/select-store.js',
            ],
            refresh: true,
        }),
    ],
});
