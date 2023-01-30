<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\animaisController;
use App\Http\Controllers\doacoesController;;

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

Route::get('/', [animaisController::class, 'index']);
Route::get('cadastro/animais', [animaisController::class, 'create']);
Route::get('animais/show', [animaisController::class, 'show']);
Route::post('animais/show', [animaisController::class, 'store']);

Route::get('cadastro/doacoes', [doacoesController::class, 'create']);
Route::get('doacoes/show', [doacoesController::class, 'show']);
Route::post('doacoes/show', [doacoesController::class, 'store']);
