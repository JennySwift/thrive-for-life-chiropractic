var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('style.scss');

    mix.scripts([
        'plugins/*.js',
        'controllers/**/*.js',
        'config.js',
        //'helpers.js',
        'repositories/**/*.js',
        'components/**/*.js',
        'app.js',
        //'routes.js'
    ], 'public/js/all.js');

    mix.version(["css/app.css", "js/all.js"]);
    mix.stylesIn('resources/assets/css', 'public/css/plugins.css');
});

