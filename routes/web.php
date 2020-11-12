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
Route::get('guns', [GunsController::class, 'index'])->name('guns.index');

Route::get('guns/create', [GunsController::class, 'creat'])->name('guns.create');

Route::get('guns/{id}', [GunsController::class, 'show'])->where('id', '[0-9]+');

Route::get('guns/{id}/edit', [GunsController::class, 'edit'])->where('id', '[0-9]+');


/* ----------------- Company --------------- */

Route::get('companies', [CompanyController::class, 'index'])->name('companies.index');

Route::get('companies/create', [CompanyController::class, 'creat'])->name('companies.create');

Route::get('companies/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+');

Route::get('companies/{id}/edit', [CompanyController::class, 'edit'])->where('id', '[0-9]+');




