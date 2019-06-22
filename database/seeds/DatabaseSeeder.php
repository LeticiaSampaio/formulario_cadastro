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
        DB::insert('insert into formularios (nome,email,descricao,upload) values (?,?,?,?)', array('Candidato1', 'exemplo1@email.com', 'Descrição candidato 1.', 'curriculo1.png'));
        DB::insert('insert into formularios (nome,email,descricao,upload) values (?,?,?,?)', array('Candidato2', 'exemplo2@email.com', 'Descrição candidato 2.', 'curriculo2.png'));
        DB::insert('insert into formularios (nome,email,descricao,upload) values (?,?,?,?)', array('Candidato3', 'exemplo3@email.com', 'Descrição candidato 3.', 'curriculo3.png'));
        DB::insert('insert into formularios (nome,email,descricao,upload) values (?,?,?,?)', array('Candidato4', 'exemplo4@email.com', 'Descrição candidato 4.', 'curriculo4.png'));
    }
}
