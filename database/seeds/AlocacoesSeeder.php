<?php

use Illuminate\Database\Seeder;

class AlocacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alocacoes')->insert(['projeto_id'=>8, 'desenvolvedor_id'=>1, 'horas_semanais'=>50]);
        DB::table('alocacoes')->insert(['projeto_id'=>1, 'desenvolvedor_id'=>2, 'horas_semanais'=>4]);
        DB::table('alocacoes')->insert(['projeto_id'=>2, 'desenvolvedor_id'=>3, 'horas_semanais'=>50]);
        DB::table('alocacoes')->insert(['projeto_id'=>3, 'desenvolvedor_id'=>1, 'horas_semanais'=>80]);
        DB::table('alocacoes')->insert(['projeto_id'=>4, 'desenvolvedor_id'=>2, 'horas_semanais'=>90]);
        DB::table('alocacoes')->insert(['projeto_id'=>5, 'desenvolvedor_id'=>3, 'horas_semanais'=>30]);
        DB::table('alocacoes')->insert(['projeto_id'=>6, 'desenvolvedor_id'=>2, 'horas_semanais'=>10]);
        DB::table('alocacoes')->insert(['projeto_id'=>7, 'desenvolvedor_id'=>2, 'horas_semanais'=>20]);
    }
}
