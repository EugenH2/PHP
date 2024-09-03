import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/css/mobile.css', 'resources/js/app.js', 'resources/css/base.css', 'resources/css/header.css', 'resources/css/home-main.css', 
                'resources/css/movies/articlePostingMovie.css.css', 'resources/css/movies/movie.css', 'resources/css/movies/postedArticles.css', 
                'resources/css/auth.css',  'resources/css/navigation.css'],
            refresh: true,
        }),
    ],
});
