const mix = require('laravel-mix');
require('laravel-mix-bundle');
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
//  mix.setPublicPath('public')
//  .bundle({
//      sourceFile : "resources/js/varibles.js",
//      outputName : "admin"
//  });

mix.scripts(['resources/js/app.js'], 'public/js/app.js')
    .combine(['resources/js/varibles.js',
            'resources/js/ajax.js',
            'resources/js/menu.js',
            'resources/js/crud.js',
            'resources/js/countries.js',
            'resources/js/leagues.js',
            'resources/js/teams.js'], 'public/js/admin.js')
    .sass('resources/sass/app/app.scss', 'public/css')
    .sass('resources/sass/admin/admin.scss', 'public/css')
   .options({
      processCssUrls: false
   });

mix.setResourceRoot("../");