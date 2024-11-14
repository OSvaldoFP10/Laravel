<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;

Route::get('/', function () {
    return view('welcome');
   // return("Bienvenidos a la pagina principal");
});
Route::get('/empleado',function (){
    return view('empleado.index');
});

Route::get('/empleado/create',[EmpleadoController::class,'create']);

/*
Route::get('curso', function (){

    return("Bienvenido a la pagina cursos");
});

Route::get('curso/{curso}', function($curso) {

    return("Bienvenido a la apgina cursos: $curso");
});
Route::get('curso/create' , function() {
    return("En esta pagina podras crear un curso");

}); */