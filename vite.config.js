import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    server: {
        host: true, // penting
        port: 5173,
        strictPort: true,
        cors: true, // aktifkan CORS
        hmr: {
            host: "172.16.239.132", // ganti sesuai IP kamu
        },
    },
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
    ],
});
