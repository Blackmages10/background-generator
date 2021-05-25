<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\theNewPageConstroller;
use App\Http\Controllers\MichaelController;

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

    //Laravel 8 WELCOME
    Route::get('/', [MichaelController::class,'display']);


    //Laravel 8 NEW
    Route::get('/new', [theNewPageConstroller::class,'index']);
    Route::get('/about', [theNewPageConstroller::class,'about']);
    Route::get('/app', [theNewPageConstroller::class,'app']);

    //Larevel 8 alsoNEW much simplier than Route::get('/new', 'App/Http/Controllers/theNewPageConstroller@index');
    Route::get('/new', 'theNewPageConstroller@index');

    //Laravel 
    Route::get('/new/about', 'theNewPageConstroller@about');
    Route::get('/new/project', [theNewPageConstroller::class, 'about']);

    //MichaelController
    Route::get('/mike', [MichaelController::class, 'michael']);

    //michael Controller show function
    Route::get('/product/{name}', [MichaelController::class, 'show']);

    //pattern is integer
    //Route::get('/product/{id}',
    //    [MichaelController::class, 'show'])->where('id','[0-9]+');
    
    //pattern is String
    //Route::get('/product/{name}',
    //   [MichaelController::class, 'show'])->where('name','[a-zA-Z]+');

    //Multiple
    Route::get('/product/{name}/{id}',
       [MichaelController::class, 'show'])->where([
           'name'=> '[a-z]+',
           'id'=> '[0-9]+'
           
          ]);

    //named routes
    Route::get('/produkto',
       [theNewPageConstroller::class, 'indez'])->name('products');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
