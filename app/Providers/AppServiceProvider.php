<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Conteudo;
use App\Character;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $conteudos = [];
        $conteudosArray = Conteudo::all();

        foreach($conteudosArray as $conteudo){
            $conteudos[$conteudo['nome']] = $conteudo['conteudo'];
        }

        View::share('conteudos', $conteudos);

        $personagens = [];
        $personagensArray = Character::all();

        foreach($personagensArray as $personagem){
            $personagens[$personagem['descricao']] = $personagem['imagem'];
        }

        View::share('personagens', $personagens);
    }
}
