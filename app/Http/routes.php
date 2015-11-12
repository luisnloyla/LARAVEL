<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function () {
    return view('bienvenido');
});

Route::get('prueba', function () {
    return "Hola soy una simple ruta, no hay de que temer";
});
Route::get('edad/{edad}', function ($edad) {//parametro obligatorio
    return "Hola mi edad es:".$edad;
});
Route::get('edad2/{edad2?}', function ($edad2=34) {//parametro opcional
    return "Hola mi edad es:".$edad2;
});
Route::get('datosPersonales/{edad2?}/{nom?}', function ($edad2=34,$nom="hola") {
    return "Hola mi edad es:".$edad2." y mi nombre es: ".$nom;
});
Route::get('miControlador','MiControladorController@index');
//Route::get('miControlador/{nombre}','MiControladorController@nombre');
Route::get('miControlador/{nombre}/{apellido}','MiControladorController@datos');
/*******************************************************************************/
Route::resource('catalogo', 'CatalogoController');

/*******************************************************************************/
/*Route::get('/', function () {
    return 'Hello World';
});*/