<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;

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

Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/anggota/create', [AnggotaController::class, 'create']);
Route::post('/anggota/create', [AnggotaController::class, 'store']);
Route::get('/anggota/edit/{id}', [AnggotaController::class, 'edit']);
Route::put('/anggota/edit/{id}', [AnggotaController::class, 'update']);
Route::get('/anggota/{id}', [AnggotaController::class, 'destroy']);

