<?php

use Illuminate\Database\Seeder;

class DesenvolvedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desenvolvedores')->insert(['nome'=>'Bernardo Augusto','cargo'=>'Analista Junior']);
        DB::table('desenvolvedores')->insert(['nome'=>'Joao Augusto','cargo'=>'Analista Pleno']);
        DB::table('desenvolvedores')->insert(['nome'=>'Paulo Augusto','cargo'=>'Analista Senior']);
    }
}
