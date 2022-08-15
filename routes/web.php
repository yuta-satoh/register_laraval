<?php

use App\Http\Controllers\RegisterController;

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
    return view('welcome');
});

Route::get('/index', [RegisterController::class, 'index'])->name('index');

// 会員登録画面の表示
Route::get('/create', [RegisterController::class, 'create'])->name('register.create');
// 会員登録処理
Route::post('/store', [RegisterController::class, 'store'])->name('register.store');

Route::get('/edit/{id}', [RegisterController::class, 'edit']);
Route::post('/UserEdit', [RegisterController::class, 'UserEdit'])->name('register.edit');

Route::post('/UserDelete/{id}', [RegisterController::class, 'UserDelete'])->name('delete');
