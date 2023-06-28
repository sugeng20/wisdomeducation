<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\JabatanController;
use App\Http\Controllers\Admin\MataPelajaranController;
use App\Http\Controllers\Admin\SekolahController;
use App\Http\Controllers\Admin\UnduhanController;
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

Route::middleware(['auth'])->prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index']);
    Route::post('guru/ganti-password/{id}', [GuruController::class, 'gantiPassword'])->name('guru.ganti-password');
    Route::resource('guru', GuruController::class);
    Route::resource('sekolah', SekolahController::class);
    Route::resource('faq', FaqController::class);
    Route::resource('jabatan', JabatanController::class);
    Route::resource('unduhan', UnduhanController::class);
    Route::resource('mata-pelajaran', MataPelajaranController::class);
});