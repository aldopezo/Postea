<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SongController;

Auth::routes();

Route::get('/home', [App\Http\Controllers\SongController::class, 'index'])->name('home');


Route::get('/', function () {
    echo "<h1>Hola Mundo</h1>";
});


Route::get('/peliculas', 'PeliculaController@index');

Route::resource('song', 'SongController') 

/*
Route::get('/mostrar-fecha', function(){
    $titulo = "Estoy mostrando la fecha";
    return view('mostrar-fecha', array(
        'titulo' => $titulo
    ));
});


Route::get('/pelicula/{titulo?}/{year?}', function ($titulo = 'No hay una pelicula seleccionada', $year = 2019) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
}) ->where(array(
    'titulo' => '[a-zA-z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function () {

    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran torino');

    return view('peliculas.listado')
            ->with('titulo', $titulo)
            ->with('listado', $listado);
});


Route::get('/pagina-generica', function () {
    return view('pagina');
});
*
*/