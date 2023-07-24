<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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

// Route::get('/home', [LoginController::class, 'index']);
Route::get('/', function () {
    return view('home', [
        "title" => "Dashboard"
    ]
);
});

// Route::get('/login', [LoginController::class, 'index']);
// Route::get('/regsiter', [RegisterController::class, 'index']);
// Route::post('/regsiter', [RegisterController::class, 'store']);
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']); 

Route::get('/register', function() {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::post('/register', function() {
    return view('home', [
        'title' => 'Dashboard'
    ]);
});

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
