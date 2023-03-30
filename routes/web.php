<?php

use App\Http\Controllers\VendaController;
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

Route::get('/', [VendaController::class, 'index']);
Route::get('/vendas/create', [VendaController::class, 'create'])->middleware('auth');
Route::get('/vendas/{id}', [VendaController::class, 'show']);
Route::post('/vendas',[VendaController::class, 'store']);

Route::get('dashboard', [VendaController::class, 'dashboard'])->middleware('auth');

