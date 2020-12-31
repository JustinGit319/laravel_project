<?php

use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GunsController;
use App\Http\Controllers\CompanyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* ----------------- Auth --------------- */
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);


Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('guns', [GunsController::class, 'api_guns']);
    Route::patch('guns', [GunsController::class, 'api_update']);
    Route::delete('guns', [GunsController::class, 'api_delete']);

    Route::get('companies', [CompanyController::class, 'api_companies']);
    Route::patch('companies', [CompanyController::class, 'api_update']);
    Route::delete('companies', [CompanyController::class, 'api_delete']);

});
