<?php

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

use App\Http\Controllers\FreteController;


Route::get('/', [FreteController::class, 'index']);
Route::get('/fretes/create', [FreteController::class, 'create'])->middleware('auth');
Route::post('/fretes', [FreteController::class, 'store']);
Route::delete('/fretes/{id}', [FreteController::class, 'destroy'])->middleware('auth');
Route::get('/fretes/edit/{id}', [FreteController::class, 'edit'])->middleware('auth');
Route::put('/fretes/update/{id}', [FreteController::class, 'update'])->middleware('auth');


Route::get('/dashboard', [FreteController::class, 'dashboard'])->middleware('auth');
// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('welcome');
// })->name('welcome');
