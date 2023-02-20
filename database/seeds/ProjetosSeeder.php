<?php

use Illuminate\Database\Seeder;

class ProjetosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projetos')->insert(['nome'=>'Sistema de Alocação de recurso', 'estimativa_horas'=>100]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Biblioteca', 'estimativa_horas'=>100]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Cadastro', 'estimativa_horas'=>5]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Criação', 'estimativa_horas'=>10]);
        DB::table('projetos')->insert(['nome'=>'Sistema de IOT', 'estimativa_horas'=>20]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Irrigação hídrica', 'estimativa_horas'=>130]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Refatoração', 'estimativa_horas'=>50]);
        DB::table('projetos')->insert(['nome'=>'Sistema de Refinamento', 'estimativa_horas'=>1000]);
    }
}
