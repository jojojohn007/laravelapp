<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//named routing 

Route::get('/posts',function(){
    return view('posts');
})->name('userposts');


Route::get('/', function () {
    return view('test');
});

//calling controller method from route
//
// Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/index', [HomeController::class, 'index']);


//running a route specified middleware

Route::get('/validate',function(){
    return view('home');
})->name('simplevalidation');

//running middleware in grouping
Route::group(['middleware'=>'Auth'],function(){
    Route::get('/delete',function(){
return view('login');
    });
    Route::get('/edit', function () {
        return view('login');
    });


});
//laravel middleware with parameters

Route::get('/verify',function(){
return view('/verify');
})->middleware(['CheckUser:abc@gmail.com']);

//Implicit controller

Route::get('/show ',function(){
    return view('show');
});























