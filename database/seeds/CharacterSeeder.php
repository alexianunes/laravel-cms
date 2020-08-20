<?php

use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ante vitae diam mattis facilisis. Morbi vitae odio tempus, bibendum urna at, tincidunt elit. ',
            'imagem' => 'uploads/images/1597106899.jpeg',
        ]);

        DB::table('characters')->insert([
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ante vitae diam mattis facilisis. Morbi vitae odio tempus, bibendum urna at, tincidunt elit. ',
            'imagem' => 'uploads/images/1597106899.jpeg',
        ]);

        DB::table('characters')->insert([
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra ante vitae diam mattis facilisis. Morbi vitae odio tempus, bibendum urna at, tincidunt elit. ',
            'imagem' => 'uploads/images/1597106899.jpeg',
        ]);
    }
}
