<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Carbon\Carbon;
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

});

Route::get('login', [AuthController::class, 'login'])->name('login-page');
Route::post('login', [AuthController::class, 'auth'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('books')->middleware('auth')->name('books.')->group(function () {
    Route::get('/', [BookController::class, 'list'])->name('list');
    Route::get('/create', [BookController::class, 'create'])->name('create');
    Route::get('/{id}', [BookController::class, 'view'])->whereNumber('id')->name('view');

    Route::post('/', [BookController::class, 'store'])->name('store');
});


