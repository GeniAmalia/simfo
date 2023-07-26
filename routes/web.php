<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrganisasiController;

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
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login-proses', [LoginController::class, 'authenticate']); 

// organisasi
Route::resource('/organisasi/organisasi', OrganisasiController::class);
// Route::get('/organisasi', function() {
//     return view('organisasi', [
//         'title' => 'Organisasi'
//     ]);
// });

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
