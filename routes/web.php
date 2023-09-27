<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BeneficiosController;
use App\Http\Controllers\ComoSeAssociarController;
use App\Http\Controllers\AreaAssociadoController;
use App\Http\Controllers\ContatoController;


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

Route::get('/', [HomeController::class, 'index']);
Route::get('/beneficios', [BeneficiosController::class, 'index']);
Route::get('/como-se-associar', [ComoSeAssociarController::class, 'index']);
Route::get('/area-associado', [AreaAssociadoController::class, 'index']);
Route::get('/sendmail', [ComoSeAssociarController::class, 'sendmail']);
Route::get('/contato', [ContatoController::class, 'index']);
