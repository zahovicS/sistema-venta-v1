import { defineConfig } from 'vite';
import leaf from '@leafphp/vite-plugin';

export default defineConfig({
    plugins: [
        leaf({
            input: [
                'resources/css/custom.css',
                'resources/css/skeleton.css',
                'resources/js/app.js',
                'resources/js/stores/select-store.js',
                'resources/js/stores/clear-select-store.js',
                'resources/js/dashboard/client-dashboard.js'
            ],
            refresh: true,
        }),
    ],
});
