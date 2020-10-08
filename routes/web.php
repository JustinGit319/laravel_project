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

Route::get('/', function () {
    return view('welcome');
});

/* Gun */
Route::get('guns/create', function(){
    return view('guns.create');
});

Route::get('guns/{id}/edit', function($id){
    return view('guns.edit');
})->where('id', '[0-9]+');

Route::get('guns', function(){
    return view('guns.index');
});

Route::get('guns/{id}', function($id){
    return view('guns.show');
})->where('id', '[0-9]+');


/* Type */
Route::get('type/create', function(){
    return view('type.create');
});

Route::get('type/{id}/edit', function($id){
    return view('type.edit');
})->where('id', '[0-9]+');

Route::get('type', function(){
    return view('type.index');
});

Route::get('type/{id}', function($id){
    return view('type.show');
})->where('id', '[0-9]+');
