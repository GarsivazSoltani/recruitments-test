import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],

    // server: {
    //     host: 'localhost',
    //     hmr: {
    //         clientPort: 5173,
    //         host: 'localhost',
    //     },
    // }

    // server: {
    //     hmr: {
    //         host: 'localhost',
    //     },
    // }
    // server: {
    //     proxy: {
    //         // اضافه کردن تنظیمات پروکسی برای Laravel
    //         '/': {
    //         target: 'http://localhost:8000', // تنظیم آدرس و پورت Laravel شما
    //         changeOrigin: true,
    //         rewrite: (path) => path.replace(/^\/tvto\/recruitment-test/, ''), // تنظیم مسیر ری‌رایت برای درخواست‌ها
    //         },
    //     },
    // },

    // resolve: {
    //   alias: {
    //     // تنظیمات الیاس برای مسیرهای فایل‌های Vue در Laravel
    //     '@': path.resolve(__dirname, '/^\/tvto\/resources/js/'), // مسیر فایل‌های Vue در Laravel شما
    //   },
    // },


});
