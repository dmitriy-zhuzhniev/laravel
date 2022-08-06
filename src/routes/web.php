<?php

use App\Components\Store\Repositories\StoreRepositoryContract;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LibraryController;
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

Route::get('/', function (StoreRepositoryContract $storeRepository) {
//    $store = $storeRepository->byId(1);
//
//    if (!$store->isActive()) {
//        abort(404);
//    }

//    $book = \App\Models\Book::first();
//
//    \App\Events\BookUpdate::dispatch($book);
//
//    dd($book);

//    try {
//        $store = $storeRepository->byId(2);
//    } catch (Exception $exception) {
//        dd($exception->getMessage());
//    }
//
//    dd($store);
});

Route::resource('libraries', LibraryController::class);

Route::get('login', [AuthController::class, 'login'])->name('login-page');
Route::post('login', [AuthController::class, 'auth'])->name('login');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('books')->name('books.')->middleware('my-auth:user')->group(function () {
    Route::get('/', [BookController::class, 'list'])->middleware('token')->name('list');
    Route::get('/create', [BookController::class, 'create'])->name('create');
    Route::get('/{id}', [BookController::class, 'view'])->whereNumber('id')->name('view');

    Route::post('/', [BookController::class, 'store'])->name('store');
});


