<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/divert', [App\Http\Controllers\DivertController::class, 'divert'])->name('divert');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function() {
    Route::get('/', [App\Http\Controllers\AdminController::class, 'adminPage'])->name('admin');
});

Route::get('/edit', [App\Http\Controllers\MemberController::class, 'editPage'])->name('edit');
Route::post('update', [App\Http\Controllers\MemberController::class, 'update'])->name('update');