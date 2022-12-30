<?php

use App\Http\Controllers\ShoeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ShoeController::class, 'index']);

Route::get('/create', [ShoeController::class, 'create']);

Route::post('/shoes', [ShoeController::class, 'store']);

Route::get('/shoes/edit/{shoe}', [ShoeController::class, 'edit']);

Route::put('/shoes/{shoe}', [ShoeController::class, 'update']);

Route::delete('/shoes/{shoe}', [ShoeController::class, 'delete']);