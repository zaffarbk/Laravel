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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::group(['middleware' => ['role:manager']], function () {
//});
Route::group(['middleware' => ['role:user']], function () {
    Route::get('/manager',[\App\Http\Controllers\ContactsController::class, 'index'])->name('manager.index');
    Route::get('/', [\App\Http\Controllers\ContactsController::class, 'create'])->name('user.create');
    Route::post('/store', [\App\Http\Controllers\ContactsController::class, 'store'])->name('user.store');
    Route::put('/update', [\App\Http\Controllers\ContactsController::class, 'update'])->name('user.update');
});
