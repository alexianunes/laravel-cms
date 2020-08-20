<?php

use Illuminate\Database\Seeder;

class ConteudosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('conteudos')->insert([
            'nome' => 'backgroundSuperior',
            'conteudo' => 'uploads/images/1597106899.jpeg',
        ]);

        DB::table('conteudos')->insert([
            'nome' => 'txtDestaqueTema',
            'conteudo' => 'Texto Destaque Tema',
        ]);

        DB::table('conteudos')->insert([
            'nome' => 'nomeJogo',
            'conteudo' => 'Nome do Jogo',
        ]);

        DB::table('conteudos')->insert([
            'nome' => 'frase',
            'conteudo' => 'Frase',
        ]);

        DB::table('conteudos')->insert([
            'nome' => 'descricao_formulario',
            'conteudo' => 'Descrição Formulário',
        ]);
    }
}
