<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Guru\ClassController;
use App\Http\Controllers\Guru\HomeController;
use App\Http\Controllers\Guru\KreasiController;
use App\Http\Controllers\UserController;
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

Route::get('/', [UserController::class, 'home']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/faq', [UserController::class, 'faq']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/sign-in', [AuthController::class, 'signIn'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::post('/register', [AuthController::class, 'register']);

Route::middleware(['auth'])->prefix('guru')->group(function() {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/unduhan', [HomeController::class, 'unduhan']);
    Route::resource('class-teacher', ClassController::class);
    Route::resource('kreasi', KreasiController::class);
});