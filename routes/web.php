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

Route::get('guns', [GunsController::class, 'index'])->name('guns.index');

Route::get('guns/create', [GunsController::class, 'creat'])->name('guns.create');

Route::get('guns/{id}', [GunsController::class, 'show'])->where('id', '[0-9]+')->name('guns.show');

Route::get('guns/{id}/edit', [GunsController::class, 'edit'])->where('id', '[0-9]+')->name('guns.edit');
Route::patch('guns/{id}/update', [GunsController::class, 'update'])->where('id', '[0-9]+')->name('guns.update');

Route::post('guns/store', [GunsController::class, 'store'])->name('guns.store');

/* ----------------- Company --------------- */

Route::get('companies', [CompanyController::class, 'index'])->name('companies.index');

Route::get('companies/create', [CompanyController::class, 'creat'])->name('companies.create');

Route::get('companies/{id}', [CompanyController::class, 'show'])->where('id', '[0-9]+')->name('companies.show');

Route::get('companies/{id}/edit', [CompanyController::class, 'edit'])->where('id', '[0-9]+')->name('companies.edit');
Route::patch('companies/{id}/update', [CompanyController::class, 'update'])->where('id', '[0-9]+')->name('companies.update');

Route::post('companies/store', [CompanyController::class, 'store'])->name('companies.store');




