<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index')->middleware('auth');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');

Route::prefix('user')->name('user.')->middleware('auth')->group(function() {
    Route::get('list', [UserController::class, 'list'])->name('list');
});

Route::prefix('server')->name('server.')->middleware('auth')->group(function() {
    Route::get('list', [ServerController::class, 'list'])->name('list');
});

Route::prefix('ticket')->name('ticket.')->middleware('auth')->group(function() {
    Route::get('/', [TicketController::class, 'index'])->name('index');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
