import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.css',
                'resources/js/common/common.js',
                'resources/js/common/swiper-init.js',
            ],
            refresh: ['app/views/**/*.php'],
        }),
    ],
    build: {
        sourcemap: true,
        cssMinify: false,
    },
});
