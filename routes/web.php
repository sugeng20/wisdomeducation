<?php

use App\Http\Controllers\AuthController;
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
Route::get('/sign-in', [AuthController::class, 'signIn']);
Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::post('/register', [AuthController::class, 'register']);