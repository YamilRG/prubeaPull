<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/mostrar', [\App\Http\Controllers\Controller::class, 'mostrar']);

Route::post('/registro', function(Request $request){
	$warro = new warros();
	$warro->nombre = $request->nombre;
	$warro->apellido = $request->apellido;
	$warro->Servidor = $_SERVER['SERVER_ADDR'];
	$warro->save();

	return warros::all();

});


Route::get('/', function(){
	return view('welcome');
});
