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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/user/{nome}', function(string $nome){
//     return 'Olá, ' . $nome;
// });

Route::get('/users', [UserController::class, 'getAll']);
Route::get('/user/{user}', [UserController::class, 'details']);
