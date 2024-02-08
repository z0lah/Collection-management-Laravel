<?php

use App\Http\Controllers\CollectionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function(){
    return redirect('/collection');
});

// User Routes
Route::get('/user', [HomeController::class, 'index'])->name('user.index');

Route::get('/user/create', [HomeController::class, 'create'])->name('user.create');
Route::post('/user/store', [HomeController::class, 'store'])->name('user.store');

Route::get('/user/edit/{id}', [HomeController::class, 'edit'])->name('user.edit');
Route::put('/user/update/{id}', [HomeController::class, 'update'])->name('user.update');

Route::delete('/user/delete/{id}', [HomeController::class, 'delete'])->name('user.delete');

// Collection Routes
Route::get('/collection', [CollectionController::class, 'index'])->name('collection.index');

Route::get('/collection/create', [CollectionController::class, 'create'])->name('collection.create');
Route::post('/collection/store', [CollectionController::class, 'store'])->name('collection.store');

Route::get('/collection/edit/{id}', [CollectionController::class, 'edit'])->name('collection.edit');
Route::put('/collection/update/{id}', [CollectionController::class, 'update'])->name('collection.update');

Route::delete('/collection/delete/{id}', [CollectionController::class, 'delete'])->name('collection.delete');

// login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-auth', [LoginController::class, 'login_auth'])->name('login-auth');

