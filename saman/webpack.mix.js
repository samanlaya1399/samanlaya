let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .js('resources/assets/js/admin.js', 'public/js')
    .js('resources/assets/js/singlepost.js', 'public/js/singlepost.js')
    .js('resources/assets/js/homepage.js', 'public/js/homepage.js')
    .js('resources/assets/js/devision.js', 'public/js/devision.js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sass('resources/assets/sass/admin.scss', 'public/css')
   .sass('resources/assets/sass/homepage.scss', 'public/css/homepage.css')
   .sass('resources/assets/sass/singlepost.scss', 'public/css/singlepost.css')
   .sass('resources/assets/sass/devision.scss', 'public/css/devision.css');
