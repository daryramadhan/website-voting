<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Validation;

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
    return view('login');
})->name('index');

// Route::get('/login', function() {
//     return view('login');
// });
// 
Route::post('/login', [LoginController::class, 'login_aksi'])->name('login');

Route::get('/logout', [LoginController::class, 'logout_aksi'])->name('logout');
// Route::get('/choose', [Validation::class, 'choose'])->name('choose');
Route::get('/result', [Validation::class, 'result'])->name('result');
Route::get('/choose-new', [Validation::class, 'choose'])->name('choose');

// Route::get('/login', function() {
//     return view('login');
// });

Route::get('/thanks', function() {
    return view('thanks');
});

Route::get('/loginVote', function() {
    return view('loginVote');
});

// Route::get('/choose-new', function() {
//     return view('choose-new');
// });

