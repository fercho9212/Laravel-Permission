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
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('node_modules/bootstrap/dist/css/bootstrap.css','public/plugins/bootstrap/css')
   .js('node_modules/bootstrap/dist/js/bootstrap.js','public/plugins/bootstrap/js')
   .js('node_modules/bootstrap/js/dist/popover.js', 'public/plugins/bootstrap/js/popper.js')
   .js('node_modules/jquery/dist/jquery.js','public/plugins/jquery/jquery.js');
