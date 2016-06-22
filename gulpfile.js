var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.sass('app.sass');
    mix.browserify('main.js');
});
