import { defineConfig } from 'vite';
import { createVuePlugin } from 'vite-plugin-vue2';

export default defineConfig({
    build: {
        rollupOptions: {
            input: 'resources/js/app.ts',
            output: {
                dir: null, // It looks like vite overrides this value
                file: __dirname + '/resources/dist/js/cartographer.js',
                format: 'es',
            }
        }
    },
    plugins: [createVuePlugin()]
})
