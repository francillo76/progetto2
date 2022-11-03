<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\AdminController;

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


// quando / vai alla vista
// Route::get('/', function () {
//     return view('welcome');
// });

// routing per frontend
// quando / vai al controller TemaController e usa la funzione 'home' (che visualizza la vista)
Route::get('/', [TemaController::class, 'home']);
Route::get('/mail', [TemaController::class, 'mail']);
Route::get('/about', [TemaController::class, 'about']);
Route::any('/cart', [TemaController::class, 'cart']);
Route::get('/pagamenti', [TemaController::class, 'pagamenti']);
Route::get('/shop', [TemaController::class, 'shop']);
Route::any('/login', [TemaController::class, 'login']);


// routing per l'area amministrativa
Route::any('/admin', [AdminController::class, 'home']);
Route::any('/dashboard', [AdminController::class, 'dashboard']);
Route::any('/creaProdotti', [AdminController::class, 'creaProdotti']);
Route::any('/creaUtenti', [AdminController::class, 'creaUtenti']);
Route::get('/listaUtenti', [AdminController::class, 'listaUtenti']);
Route::get('/ordini', [AdminController::class, 'ordini']);