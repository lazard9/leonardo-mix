const mix = require('laravel-mix');

mix.sass('./assets/sass/style.scss', './style.css');

mix.sass('./assets/sass/woocommerce.scss', './woocommerce.css');

mix.js('./assets/js/file1.js', './main.js');
