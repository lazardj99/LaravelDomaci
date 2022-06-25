<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PicaController;
use App\Http\Controllers\UserController;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Auth;

use Symfony\Component\Routing\Annotation\Route as AnnotationRoute;

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
Route::resource('users',UserController::class);
Route::resource('picas',PicaController::class);
Route::get('/users', [App\Http\Controllers\UserController::class, 'index']);
Route::get('/picas', [App\Http\Controllers\PicaController::class, 'index']);
Route::get('/countries' ,[App\Http\Controllers\DrzavaController::class, 'index']);
Route::get('/{userId}/pica', [App\Http\Controllers\PicaUserController::class, 'index'])->where('userId', '[0-9]+');
Route::get('/userpica', [App\Http\Controllers\PicaUserController::class, 'getAllInfo']);
Route::get('/user/{userId}', [App\Http\Controllers\UserController::class, 'getUser'])->where('userId', '[0-9]+')->name('SpecificUser');
Route::post('/user/spesific', [App\Http\Controllers\UserController::class, 'Specific']);
Route::post('/pica/spesific', [App\Http\Controllers\PicaController::class, 'Specific']);
Route::post('/drzava/spesific', [App\Http\Controllers\DrzavaController::class, 'Specific']);
Route::get('/pica/{picaId}', [App\Http\Controllers\PicaController::class, 'getPica'])->where('picaId', '[0-9]+')->name('SpecificPica');
Route::get('/drzava/{drzavaId}', [App\Http\Controllers\DrzavaController::class, 'getDrzava'])->where('drzavaId', '[0-9]+')->name('SpecificDrzava');
