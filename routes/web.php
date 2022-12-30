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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route by Role = ADMIN 
Route::middleware(['auth', 'Role:Administrator'])->prefix('admin')->group(function(){
    Route::get('/home', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.home');
    Route::get('/data/balita', [App\Http\Controllers\Admin\BalitaController::class, 'index'])->name('admin.balita');
    Route::post('/store/data/balita', [App\Http\Controllers\Admin\BalitaController::class, 'store'])->name('admin.add.balita');
    Route::put('/update/data/balita/{id}', [App\Http\Controllers\Admin\BalitaController::class, 'update'])->name('admin.update.balita');
    Route::delete('/delete/data/balita/{id}', [App\Http\Controllers\Admin\BalitaController::class, 'destroy'])->name('admin.delete.balita');
});

//Route by Role = KADER
Route::middleware(['auth', 'Role:Kader'])->prefix('kader')->group(function(){
    Route::get('/home', [App\Http\Controllers\Kader\DashboardController::class, 'index'])->name('kader.home');
});

//Route by Role = PENGUNJUNG
Route::middleware(['auth', 'Role:Pengunjung'])->prefix('pengunjung')->group(function(){
    Route::get('/home', [App\Http\Controllers\Pengunjung\HomeController::class, 'index'])->name('pengunjung.home');
});