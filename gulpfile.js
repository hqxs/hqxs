const elixir = require('laravel-elixir');

<<<<<<< HEAD
require('laravel-elixir-vue');
=======
require('laravel-elixir-vue-2');
>>>>>>> b07241033d05bb0a6ea97d43a53abc38da370ec1

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
<<<<<<< HEAD
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
=======
 | file for your application as well as publishing vendor resources.
 |
 */

elixir((mix) => {
>>>>>>> b07241033d05bb0a6ea97d43a53abc38da370ec1
    mix.sass('app.scss')
       .webpack('app.js');
});
