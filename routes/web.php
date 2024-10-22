<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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
    // return view('welcome');
    return view('admin.register');
});

Route::POST('register', [UserController::class, 'register'])->name('register');

Route::GET('/login', [UserController::class, 'login'])->name('login');

Route::POST('/login', [UserController::class, 'login_user'])->name('login.user');

Route::get('/index', [UserController::class, 'dashboard'])->name('admin.index')->middleware('auth');

// This route handles the logout functionality
Route::post('/logout', [UserController::class, 'logout_user'])->name('logout.user');

// This route shows the login page
Route::get('/login', [UserController::class, 'logout'])->name('login');

