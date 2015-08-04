var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(
    function (mix)
    {
        mix.sass('app.scss', 'public/content/themes/LaraPress/assets/css');

        mix.scripts(
            [
                '../../vendor/jquery/dist/jquery.js',
                '../../vendor/foundation/js/foundation.js',
                'app.js',
                '**/*.js'
            ], 'public/content/themes/LaraPress/assets/js/app.js'
        );
    }
);