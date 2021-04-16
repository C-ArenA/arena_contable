const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/currencies/postRates.js', 'public/js/currencies')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    // Views' Styles
    .css('resources/css/layouts/dashboard.css', 'public/css/layouts')
    .css('resources/css/home/home.css', 'public/css/home')
    .css('resources/css/currencies/currencies.css', 'public/css/currencies')
    // Components' Styles
    .css('resources/css/components/table.css', 'public/css/components')
    .css('resources/css/components/button.css', 'public/css/components')
    .css('resources/css/components/card.css', 'public/css/components')
    .setResourceRoot('../');
