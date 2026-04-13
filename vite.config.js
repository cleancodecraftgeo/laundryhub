import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';
import tailwindcss from 'tailwindcss'
export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),

        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
        tailwindcss(),

    ],
//     server: {
//     port: 5173,
//     proxy: {
//       '/api': 'http://localhost:8000', // backend URL
//     },
//   },
   server: {
    watch: {
        ignored: ['**/storage/framework/views/**'],
    },
    hmr: {
        overlay: true,  // hot reload xətaları göstərsin
    },
},
});
