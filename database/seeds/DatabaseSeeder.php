<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into formularios (nome,email,descricao,upload) values (?,?,?,?)', array('Leticia', 'lsampaio@inf.ufpel.edu.br', 'Graduanda de Ciência da Computação', 'imagem.png'));
    }
}
