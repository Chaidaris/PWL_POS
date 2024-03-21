<?php

use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('user', [UserController::class, 'index']);
Route::get('user/create', [UserController::class, 'create']);
Route::post('user', [UserController::class, 'store']);
Route::get('user/{id}/ubah', [UserController::class, 'ubah']);
Route::put('user/{id}', [UserController::class, 'ubah_simpan']);
Route::delete('user/{id}', [UserController::class, 'hapus']);
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