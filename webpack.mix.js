const { mix } = require('laravel-mix');

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
   .combine([
   		'resources/assets/css/login.css',
   		'resources/assets/css/bootstrap-social.css'
   	], 'public/css/login.css')
   .combine([
		'resources/assets/css/layout.css',
		'resources/assets/css/home.css',
	], 'public/css/all.css')
   .combine([
   		'resources/assets/js/login.js',
   		'resources/assets/js/particle-ground.min.js'
   	], 'public/js/login.js')
   .version();
