<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\loginController;

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


Route::get('/', [loginController::class, 'login'])->name('login');
Route::post('/attempt_login', [loginController::class, 'attempt_login'])->name('attempt_login');;
Route::post('/signup', [loginController::class, 'signup'])->name('signup');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', [dashboardController::class, 'index']);
});
