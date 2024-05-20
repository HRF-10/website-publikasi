<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AspiController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [LoginController::class, 'dashboard'])->name('dashboard');

Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/tentang', [MainController::class, 'about'])->name('about');

Route::get('/oops', [MainController::class, 'error'])->name('error');

Route::get('/respon2023', [MainController::class, 'respon2023'])->name('respon2023')->middleware('auth');
Route::get('/respon2024', [MainController::class, 'respon2024'])->name('respon2024')->middleware('auth');
Route::get('/respon/{id}', [MainController::class, 'detailRespon'])->name('detail_respon')->middleware('auth');

Route::get('/kurikulum2023', [MainController::class, 'kurikulum2023'])->name('kurikulum2023')->middleware('auth');
Route::get('/kesiswaan2023', [MainController::class, 'kesiswaan2023'])->name('kesiswaan2023')->middleware('auth');
Route::get('/sarpras2023', [MainController::class, 'sarpras2023'])->name('sarpras2023')->middleware('auth');
Route::get('/humas2023', [MainController::class, 'humas2023'])->name('humas2023')->middleware('auth');
Route::get('/ktu2023', [MainController::class, 'ktu2023'])->name('ktu2023')->middleware('auth');
Route::get('/bendahara2023', [MainController::class, 'bendahara2023'])->name('bendahara2023')->middleware('auth');
Route::get('/it2023', [MainController::class, 'it2023'])->name('it2023')->middleware('auth');
Route::get('/osis2023', [MainController::class, 'osis2023'])->name('osis2023')->middleware('auth');
Route::get('/pmr2023', [MainController::class, 'pmr2023'])->name('pmr2023')->middleware('auth');
Route::get('/forasi', [MainController::class, 'forasi'])->name('forasi')->middleware('auth');
Route::get('/eforasi', [MainController::class, 'eforasi'])->name('eforasi')->middleware('auth');

Route::resource('/formasi', FormController::class)->middleware('auth');

Route::resource('/aspirasisaya', AspiController::class)->middleware('auth');
Route::resource('/filter', AspiController::class)->middleware('auth');
Route::resource('/admin', AdminController::class)->middleware('admin');
Route::resource('/filterAdmin', AdminController::class)->middleware('admin');
