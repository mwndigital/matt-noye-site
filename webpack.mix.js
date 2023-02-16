const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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

mix.js('resources/assets/js/app.js', 'public/assets/js')
    .js('resources/assets/js/sitewide.js', 'public/assets/js')
    .js('resources/assets/js/admin.js', 'public/assets/js')
    .js('resources/assets/js/client.js', 'public/assets/js')
    .js('resources/assets/js/staff.js', 'public/assets/js')
    .js('resources/assets/js/user.js', 'public/assets/js')
    .js('resources/assets/js/frontend.js', 'public/assets/js')
    .sass('resources/assets/sass/app.scss', 'public/assets/css')
    .sass('resources/assets/sass/admin.scss', 'public/assets/css')
    .sass('resources/assets/sass/client.scss', 'public/assets/css')
    .sass('resources/assets/sass/staff.scss', 'public/assets/css')
    .sass('resources/assets/sass/user.scss', 'public/assets/css')
    .sass('resources/assets/sass/fontend.scss', 'public/assets/css')
    .options({
        processCssUrls: false,
        postCss: [tailwindcss('./tailwind.config.js')],
    })
    .copy(
        'node_modules/@fortawesome/fontawesome-free/webfonts',
        'public/assets/webfonts'
    )
;
