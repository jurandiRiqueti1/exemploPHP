<?php

use App\Http\Controllers\UserController;
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

Route::redirect('/', '/users');

Route::get('/users', [UserController::class, 'getAll']);
Route::get('/user/{user}', [UserController::class, 'details']);
Route::get('/users/create', [UserController::class, 'createView']);
Route::post('/users/store', [UserController::class, 'store']);
Route::put('/users/update/{user}', [UserController::class, 'update']);
Route::delete('/users/delete/{user}', [UserController::class, 'delete']);