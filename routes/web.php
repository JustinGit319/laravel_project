<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunsController;
use App\Http\Controllers\CompanyController;
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

//Route::get('guns', function(){
//    return view('guns.index');
//});
Route::get('guns', [GunsController::class, 'index']);

Route::get('guns/create', [GunsController::class, 'creat']);

Route::get('guns/{id}', [GunsController::class, 'show'])->where('id', '[0-9]+');

Route::get('guns/{id}/edit', [GunsController::class, 'edit'])->where('id', '[0-9]+');


/* ----------------- Company --------------- */

Route::get('companys', [CompanyController::class, 'index']);

Route::get('companys/create', [CompanyController::class, 'creat']);

Route::get('companys/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+');

Route::get('companys/{id}/edit', [CompanyController::class, 'edit'])->where('id', '[0-9]+');




