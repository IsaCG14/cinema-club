<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\LogController;
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
    return view('welcome');
});

Route::controller(MovieController::class)->group(function () {
   Route::get("/", 'index')->name('home');
   Route::get("/create", 'create')->name('create');
   Route::get("/update/{id}", 'edit')->name('update');
   Route::put('/edits/{id}', 'updateSinopsis')->name('edits');
});

Route::resource('movie', MovieController::class);

Route::controller(LogController::class)->group(function () {
   Route::get("/admin", 'index');
   Route::get("/register", 'create')->name('register');
   Route::post('/login', 'login')->name('login');
   Route::get('logout', 'logout');
});


