const mix = require('laravel-mix');


// Main CSS
mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();



// *********Start demo *********Start

//demo admin JS 
mix.js('resources/js/demo/admin/js/app.js', 'public/js/demo/admin/app.js')
    .vue(); 
//demo admin CSS 
mix.styles([
        'resources/css/common/preloader.css',
        'resources/css/demo/admin/style.css',
    ], 'public/css/demo/admin/app.css');


//demo user JS 
mix.js('resources/js/demo/user/js/app.js', 'public/js/demo/user/app.js')
    .vue();
//demo user CSS 
mix.styles([
        'resources/css/common/preloader.css',
        'resources/css/demo/user/style.css',
    ], 'public/css/demo/user/app.css');

// *********End demo *********End
