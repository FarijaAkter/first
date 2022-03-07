<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User;
use App\Http\Controllers\Form;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
//part-1
Route::get('/first/{id}', function ($id) {
    echo $id;
    return view('first');
});
//Route::view('first','first');
Route::get('/userhome',[User::class,'index']);
Route::get('/userhome/{id}',[User::class,'index']);

Route::get('/home',[User::class,'index']);
Route::get('/about',[User::class,'about']);
Route::get('/services',[User::class,'services']);
//part-2
Route::view('/page','page');
Route::view('/p','p');

Route::view('/form','form');
Route::post('/store',[Form::class,'index']);
//part-3
//Route::view('/web','web');
Route::get('/web', function () {
    return view('/web',array('data'=>array(1,2,3,4)));
});



