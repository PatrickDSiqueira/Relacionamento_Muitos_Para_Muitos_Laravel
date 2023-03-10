<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlocacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alocacoes', function (Blueprint $table) {
            $table->bigInteger('desenvolvedor_id')->unsigned();
            $table->bigInteger('projeto_id')->unsigned();
            $table -> primary(['projeto_id','desenvolvedor_id']);
            $table -> foreign('desenvolvedor_id')->references('id')->on('desenvolvedores');
            $table-> foreign("projeto_id")->references('id')-> on('projetos');
            $table -> integer('horas_semanais');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alocacoes');
    }
}
