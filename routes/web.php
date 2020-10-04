<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnemyController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\ItemController;

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

Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[AdminController::class,'index'])->name('admin');
    Route::get('heroes',[HeroController::class,'index'])->name('admin.heroes');
    Route::get('enemies',[EnemyController::class,'index'])->name('admin.enemies');
    Route::get('items',[ItemController::class,'index'])->name('admin.items');
});

//Route::get('/admin/{name}',[AdminController::class,'index']);

/*Route::get('/home/{name}',function($name){
    return view('home',['name'=>$name]);
    //return "esto es home. Hola ".$name." bienvenido";
})->where('name', '[A-Za-z]+');*/
