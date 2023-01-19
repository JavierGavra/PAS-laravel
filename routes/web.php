<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinationController;

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

// for Admin
Route::get('/admin12345', [DestinationController::class, 'indexAdmin']);
Route::get('/create', [DestinationController::class, 'create']);
Route::post('/add', [DestinationController::class, 'store']);
Route::delete('/delete/{destination}', [DestinationController::class, 'destroy']);
Route::get('/edit/{destination}', [DestinationController::class, 'edit']);
Route::post('/update/{destination}', [DestinationController::class, 'update']);

// for User
Route::get('/', [DestinationController::class, 'index']);
