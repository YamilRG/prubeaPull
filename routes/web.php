<?php

use Illuminate\Support\Facades\Route;
use App\warro;
use Illuminate\Http\Request;
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
Route::get('/mostrara', [\App\Http\Controllers\Controller::class, 'mostrar']);

Route::post('/registro', function(Request $request){
	$warro = new warro();
	$warro->nombre = $request->nombre;
	$warro->servidor = $_SERVER['SERVER_ADDR'];
	$warro->save();

	return warro::all();

});


Route::get('/', function(){
	return view('welcome');
});
