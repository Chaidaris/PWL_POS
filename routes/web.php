<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']);
    Route::post('/list', [UserController::class, 'list']);
    Route::get('/create', [UserController::class, 'create']);
    Route::post('/', [UserController::class, 'store']);
    Route::get('/{id}', [UserController::class, 'show']);
    Route::get('/{id}/edit', [UserController::class, 'edit']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
});

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/create', [KategoriController::class, 'create']);
Route::post('/kategori', [KategoriController::class, 'store']);
Route::get('/kategori/{id}/ubah', [KategoriController::class, 'ubah']);
Route::put('/kategori/{id}', [KategoriController::class, 'ubah_simpan']);
Route::delete('/kategori/{id}', [KategoriController::class, 'hapus']);

Route::get('level', [LevelController::class, 'index']);
Route::get('level/create', [LevelController::class, 'create']);
Route::post('level', [LevelController::class, 'store']);
Route::get('level/{id}/ubah', [LevelController::class, 'ubah']);
Route::put('level/{id}', [LevelController::class, 'ubah_simpan']);
Route::delete('level/{id}', [LevelController::class, 'hapus']);