<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/pica', [App\Http\Controllers\PicaController::class, 'insertPica']);
Route::get('/drzava', [App\Http\Controllers\DrzavaController::class, 'insertDrzava']);
Route::post('/pica/insert', [App\Http\Controllers\PicaController::class, 'insert']);
Route::post('/drzava/insert', [App\Http\Controllers\DrzavaController::class, 'insert']);
