<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoadoresController;

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
    return view('home');
});

Route::get('/doadores', [DoadoresController::class, 'listDoadores'])->name('doadores');
Route::get('/doador/add', [DoadoresController::class, 'addDoador'])->name('novoDoador');
Route::post('/doador/add/new', [DoadoresController::class, 'addNewDoador'])->name('novoNewDoador');
Route::get('/doador/edit/{id}', [DoadoresController::class, 'editDoador']);
Route::post('/doador/update/{id}', [DoadoresController::class, 'updateDoador']);
Route::get('/doador/delete/{id}', [DoadoresController::class, 'deleteDoador']);