<?php

use Illuminate\Support\Facades\Auth;
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
    return view('dashboard', [
        "title" => "Dashboard"
    ]);
});

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

<<<<<<< HEAD
Auth::routes();Route::middleware(['auth', 'role:Admin'])->prefix('masyarakat')->group(function () {
Route::get('/balita', [App\Http\Controllers\Admin\BalitaController::class, 'index'])->name('balita.index');
});
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route by Role = ADMIN 
Route::middleware(['auth', 'Role:Administrator'])->prefix('admin')->group(function(){
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
});

//Route by Role = KADER
Route::middleware(['auth', 'Role:Kader'])->prefix('kader')->group(function(){
    Route::get('/home', [App\Http\Controllers\Kader\DashboardController::class, 'index'])->name('kader.home');
});

//Route by Role = PENGUNJUNG
Route::middleware(['auth', 'Role:Pengunjung'])->prefix('pengunjung')->group(function(){
    Route::get('/home', [App\Http\Controllers\Pengunjung\HomeController::class, 'index'])->name('pengunjung.home');
});
>>>>>>> 850f8c5980aa80b8d463b62d1a94e170f9804ae3
