const elixir = require('laravel-elixir');

//Ens avisarà si el nostre codi va pasant els testos.
elixir(mix => {
    mix.phpSpec();
});
