<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Projeto;
use App\Alocacao;
use App\Desenvolvedor;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/desenvolvedor_projetos', function (){
    $desenvolvedores = Desenvolvedor::with('projetos')->get();

    foreach ($desenvolvedores as $d){
        echo "<p>Nome do Desenvolvedor: ".$d->nome."</p>";
        echo "<p>Cargo: ".$d->cargo."</p>";
        if (count($d -> projetos)>0){
            echo "Projetos:<br>";
            echo"<ul>";
            foreach ($d->projetos as $p){
                echo"<li>";
                echo "<p>Nome do Projeto: ".$p->nome." | ";
                echo "Horas estimadas: ".$p->estimativa_horas ." | ";
                echo "Horas Trabalhadas: ".$p->pivot->horas_semanais."</p>";
                echo"</li>";
            }
            echo "</ul>";
            }
        echo "<hr>";
    }
});

Route::get('projeto_desenvolvedores', function (){
    $projetos = Projeto::with('desenvolvedores')->get();
    foreach ($projetos as $p){
        echo "<p>Nome do Projeto: ".$p->nome."</p>";
        echo "<p>Estimativa Horas: ".$p->estimativa_horas."</p>";
        if (count($p -> desenvolvedores)>0){
            echo "Desenvolvedores:<br>";
            echo"<ul>";
            foreach ($p->desenvolvedores as $d){
                echo"<li>";
                echo "<p>Nome do Desenvolvedor: ".$d->nome." | ";
                echo "Cargo: ".$d->cargo ." | ";
                echo "Horas Trabalhadas: ".$d->pivot->horas_semanais."</p>";
                echo"</li>";
            }
            echo "</ul>";
        }
        echo "<hr>";
    }
});

Route::get('/alocar', function (){
    $proj = Projeto::find(4);
    if (isset($proj)){
//        $proj->desenvolvedores()->attach(1, ['horas_semanais'=>50]);
        $proj->desenvolvedores()->attach([
            // o desenvolvedores sem () é atributo e retorna um array
            // o desenvolvedores com () é uma funçao e retorna um objeto
            2 => ['horas_semanais'=>50],
            3 => [ 'horas_semanais' =>30]
        ]);
    }
})
