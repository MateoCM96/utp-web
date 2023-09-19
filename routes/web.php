<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware(['auth', 'auth.session'])->group(function () {
    Route::get('/{user:username}', [PostController::class, 'index'])->name('post');
    
    Route::get('/user',[UserController::class, 'index'])->name('user'); // Se usa para mostrar la vista de editar perfil
    Route::post('/user',[UserController::class, 'store']); // Se usa para guardar los cambios del perfil, se usa el facade para llamar al metodo saveOrUpdate

    Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
       
});

