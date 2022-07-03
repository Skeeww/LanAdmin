<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServerController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StaffController;

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

Route::prefix('staff')->name('staff.')->middleware('auth')->group(function() {
    Route::get('/list', [StaffController::class, 'staff'])->name('list');
    Route::post('/add', [StaffController::class, 'add'])->name('add.post');
    Route::view('/add', 'staff.add')->name('add.get');
    Route::get('/{id}', [StaffController::class, 'get'])->name('view');
    Route::get('/delete/{id}', [StaffController::class, 'deleteView'])->name('delete.get');
    Route::post('/delete/{id}', [StaffController::class, 'delete'])->name('delete.post');
    Route::get('/edit/{id}', [StaffController::class, 'editView'])->name('edit.get');
    Route::post('/edit/{id}', [StaffController::class, 'edit'])->name('edit.post');
});

Route::get('/search', [SearchController::class, 'query'])->middleware('auth')->name('search.query');

Route::get('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');
