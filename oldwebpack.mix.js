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

const path = require('path');

mix.alias({
    ziggy: path.resolve('vendor/tightenco/ziggy/dist/vue'),
});

mix.js('resources/js/app.js', 'public/js')
    .vue()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

mix.styles([
    'public/front/css/bootstrap.min.css',
    'public/front/css/font-awesome.min.css',
    'public/front/css/animate.css',
    'public/front/css/owl.carousel.css',
    'public/front/css/slick.css',
    'public/front/css/magnific-popup.css',
    'public/front/css/off-canvas.css',
    'public/front/fonts/flaticon.css',
    'public/front/fonts/fonts2/flaticon.css',
    'public/front/css/rsmenu-main.css',
    'public/front/css/rsmenu-transitions.css',
    // 'public/front/css/style.css',
    // 'public/front/css/responsive.css',
], 'public/css/all.min.css');

mix.styles([
    'public/front/css/style.css',
    'public/front/css/responsive.css',
], 'public/css/custom.min.css');


mix.scripts([
    'public/front/js/modernizr-2.8.3.min.js',
    'public/front/js/jquery.min.js',
    'public/front/js/bootstrap.min.js',
    'public/front/js/owl.carousel.min.js',
    'public/front/js/slick.min.js',
    'public/front/js/isotope.pkgd.min.js',
    'public/front/js/imagesloaded.pkgd.min.js',
    'public/front/js/wow.min.js',
    'public/front/js/waypoints.min.js',
    'public/front/js/jquery.counterup.min.js',
    'public/front/js/jquery.magnific-popup.min.js',
    'public/front/js/rsmenu-main.js',
    'public/front/js/plugins.js',
    'public/front/js/main.js',
], 'public/js/all.min.js');
