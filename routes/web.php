<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\PetugasController;

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
})->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/tugas', [TugasController::class, 'index']);
Route::get('/tugas/form', [TugasController::class, 'create']);
Route::post('/tugas/store', [TugasController::class, 'store']);
Route::get('/tugas/edit/{id}', [TugasController::class, 'edit']);
Route::put('/tugas/{id}', [TugasController::class, 'update']);
Route::delete('/tugas/{id}', [TugasController::class, 'destroy']);

Route::get('/petugas', [PetugasController::class, 'index']);
Route::get('/petugas/form', [PetugasController::class, 'create']);
Route::post('/petugas/store', [PetugasController::class, 'store']);
Route::get('/petugas/edit/{id}', [PetugasController::class, 'edit']);
Route::put('/petugas/{id}', [PetugasController::class, 'update']);
Route::delete('/petugas/{id}', [PetugasController::class, 'destroy']);
