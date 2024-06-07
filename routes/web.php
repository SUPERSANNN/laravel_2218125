<?php

use App\Http\Controllers\itemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/item', [itemController::class, 'index']);
Route::get('/item/tambah', [itemController::class, 'create']);
Route::post('/item/store', [itemController::class, 'store']);
Route::get('/item/edit/{id}', [itemController::class, 'edit']);
Route::put('/item/update/{id}', [itemController::class, 'update']);
Route::get('/item/hapus/{id}', [itemController::class, 'delete']);
Route::get('/item/destroy/{id}', [itemController::class, 'destroy']);

Route::get('/item/cetak', [itemController::class, 'cetak']);
