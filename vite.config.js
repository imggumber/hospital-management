import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            // Combine all input files into a single array
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/scss/main.scss',
                'public/css/main.css'
            ],
            refresh: true,
        }),
    ],
    resolve: { 
        alias: {
            vue: 'vue/dist/vue.esm-bundler.js',
        },
    },
});
