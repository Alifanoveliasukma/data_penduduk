<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;

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

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'indexuser'])->name('home');



Route::middleware('role:admin')->get('/dashboard', function() {
        return 'dashboard <a href="/dashboard/data_penduduk">melihat dashboard</a>'; })->name('dashboard');
Route::middleware('role:admin')->get('/dashboard/data_penduduk', [AdminController::class, 'index']);
Route::middleware('role:admin')->get('/dashboard/create', [AdminController::class, 'create']);
Route::middleware('role:admin')->post('/dashboard', [AdminController::class, 'store']);
Route::middleware('role:admin')->get('/dashboard/{id}/edit', [AdminController::class, 'edit']);
Route::middleware('role:admin')->put('/dashboard/{id}', [AdminController::class, 'update']);
Route::middleware('role:admin')->delete('/dashboard/{id}', [AdminController::class, 'destroy']);  
Route::middleware('role:admin')->get('/password/reset', [AdminController::class, 'secret']);

