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

/* ----------------- Gun --------------- */
Route::get('guns/create', function(){
    return view('guns.create');
});

Route::get('guns/{id}/edit', function($id){
    if ($id == 5){
        $gun_name = "AK-47";
        $gun_type = "Assault rifle";
    } else {
        $gun_name = "Whatever";
        $gun_type = "Whatever";
    }
    $data = compact("gun_name", "gun_type");
    return view('guns.edit', $data);
})->where('id', '[0-9]+');

Route::get('guns', function(){
    return view('guns.index');
});

Route::get('guns/{id}', function($id){
    if ($id == 5){
        $gun_name = "AK-47";
        $gun_type = "Assault rifle";
    } else {
        $gun_name = "Whatever";
        $gun_type = "Whatever";
    }
    $data = compact($gun_name, $gun_type);
    return view('guns.show', $data);
})->where('id', '[0-9]+');


/* ----------------- Type --------------- */
Route::get('types/create', function(){
    return view('types.create');
});

Route::get('types/{id}/edit', function($id){
    if ($id == 5){
        $type_name = "Assault rifle";
        } else {
        $type_name = "Whatever";
    }
    $data = compact("type_name");
    return view('types.edit', $data);
})->where('id', '[0-9]+');

Route::get('types', function(){
    return view('types.index');
});

Route::get('types/{id}', function($id){
    if ($id == 5){
        $type_name = "Assault rifle";
    } else {
        $type_name = "Whatever";
    }
    $data = compact("type_name");
    return view('types.show', $data);
})->where('id', '[0-9]+');


