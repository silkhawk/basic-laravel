<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hello;
use App\Http\Controllers\UserController;
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

/*
Route::get('/', function () {
    // return view('welcome');
    return view('hello');
});
*/


Route::get('/hello', [Hello::class, 'index']);
Route::get('/hello/user', [Hello::class, 'user']);

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/', [UserController::class, 'index'])->name('user.index');
Route::get('/user/form', [UserController::class, 'form'])->name('user.form');
Route::post('/user/process', [UserController::class, 'processForm'])->name('user.process');
