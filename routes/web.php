<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function(){
    return view('admin.index');
});

//Route::get('/admin/{name}',[AdminController::class,'index']);

/*Route::get('/home/{name}',function($name){
    return view('home',['name'=>$name]);
    //return "esto es home. Hola ".$name." bienvenido";
})->where('name', '[A-Za-z]+');*/
