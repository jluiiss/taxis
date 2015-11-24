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
/*Route::get('controlador','pruebacontroller@index');

Route::get('name/{nombre}','pruebacontroller@nombre');

Route::resource('movie','Moviecontroller');





Route::get('prueba',function(){
	return "HOLA DESDE routes.php";
}	);

Route::get('nombre/{nombre}',function($nombre){
	return "Mi nombre es: ".$nombre;
}	);

Route::get('edad/{edad}',function($edad){
	return "Mi edad es: ".$edad;
}	);

Route::get('edad2/{edad2?}',function($edad2=25){
	return "Mi nombre es: ".$edad2;
}	);  


Route::get('/', function () {
    return view('welcome');
});

Route::get('/','Froncontroller@index');
Route::get('mision','Froncontroller@mision');
Route::get('/vision','Froncontroller@vision');
*/


Route::get('/','prueba@index');
Route::get('home','prueba@index');
Route::get('admin','prueba@admin');
/*Route::get('registro','prueba@registro');
*/
Route::resource('log','LogController');
Route::get('logout','LogController@logout');
Route::resource('usuario',        'Usuariocontroller');

Route::resource('direcciones','DireccionesController');
Route::resource('personas',      'PersonasController');
Route::resource('tarifa',          'TarifaController');
Route::resource('vehiculo',      'vehiculoController');
Route::resource('registro',      'registroController');
Route::resource('empresa',        'empresaController');
Route::resource('control',        'controlController');

Route::resource('operaciones',   'Registrocontroller');





