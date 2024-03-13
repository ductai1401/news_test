<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

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
    return view('master');
});

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'viewLogin'])->name('viewLogin');

    Route::post('/login', [AuthController::class, 'login'])->name('login');

    Route::get('/Logout', [AuthController::class, 'logout'])->name('logout');

    Route::post('/register', [AuthController::class, 'register'])->name('register');    
});