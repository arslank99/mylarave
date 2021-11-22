<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\testcontroller;
use App\Http\Controllers\PostController;
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
/*Route::get('page',[BlogController::class,'show']);
Route::get('page1/{name}',[BlogController::class,'show1']);
Route::get('profile/{name}',[BlogController::class,'show3']);
Route::get('testing',[BlogController::class,'myfunc']);
Route::view('test','test');
Route::get('test',[BlogController::class,'contact']);
/*
| this is test controller work here
*/
Route::post('form', [testcontroller::class,'first']);
Route::view('login','Admin.form');
Route::get('show',[testcontroller::class,'show']);
Route::get('db',[testcontroller::class,'dbcheck']);
Route::get('data',[testcontroller::class,'sample']);
/*Route::get('posts', [PostController::class,'index']);
Route::get('post/{id}', [PostController::class,'show']);*/
Route::view('layout2','inherit.layout2');*/
Route::resource('posts',PostController::class);
