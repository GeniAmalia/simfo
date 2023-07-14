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
        "title" => "Home"
    ]
);
});

// Route::get('/login', [LoginController::class, 'index']);
// Route::get('/regsiter', [RegisterController::class, 'index']);
// Route::post('/regsiter', [RegisterController::class, 'store']);
Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register', [
        'title' => 'Register'
    ]);
});

Route::post('/register', function() {
    return view('register', [
        'title' => 'Register'
    ]);
});
