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
    .js('resources/assets/js/survey.js', 'public/js')
    .sourceMaps()
    .version()
   .sass('resources/assets/sass/app.scss', 'public/css');

// mix.sass('style.scss');
//
// mix.scripts([
//     'plugins/*.js',
//     'config.js',
//     //'helpers.js',
//     'repositories/**/*.js',
//     'components/**/*.js',
//     'transitions/**/*.js',
//     'app.js',
//     //'routes.js'
// ], 'public/js/all.js');
//
// mix.version(["css/app.css", "js/all.js"]);
// mix.stylesIn('resources/assets/css', 'public/css/plugins.css');
