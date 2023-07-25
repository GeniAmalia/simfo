<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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


Route::get('/', [HomeController::class, 'index'])->name('Dashboard');
Route::get('/home', [HomeController::class, 'index'])->name('Dashboard');
Route::get('/dashboard', function() {
    return view('dashboard', [
        'title' => 'Dashboard'
    ]);
});
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-proses', [LoginController::class, 'authenticate']); 

Route::get('/organisasi', function() {
    return view('organisasi', [
        'title' => 'Organisasi'
    ]);
});
Route::get('/input-organisasi', function() {
    return view('input-organisasi', [
        'title' => 'organisasi'
    ]);
});

Route::get('/forum', function() {
    return view('forum', [
        'title' => 'Forum'
    ]);
});
Route::get('/berita', function() {
    return view('berita', [
        'title' => 'Berita'
    ]);
});
