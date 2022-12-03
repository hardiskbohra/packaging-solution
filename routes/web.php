<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/dashboard', 'dashboard-analytics')->middleware(['auth']);;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');

//user
// Route::get('/user-list',[App\Http\Controllers\UserController::class, 'index'])->name('user.list');
// Route::get('/users/{id}',[App\Http\Controllers\UserController::class, 'edit'])->name('user.show');
// Route::post('/users/{id}',[App\Http\Controllers\UserController::class, 'update']);
Route::resource('users', App\Http\Controllers\UserController::class);

// Route::resource('users',App\Http\Controllers\UserController::class);