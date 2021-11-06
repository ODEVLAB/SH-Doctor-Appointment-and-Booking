<?php

use App\Http\Controllers\LoginController;
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
    return view(auth()->user()?'welcome':'users.create');
});
Route::get('register', [RegisterController::class, 'create'])->middleware(['guest']);
Route::post('register', [RegisterController::class, 'store'])->middleware(['guest']);

Route::get('login', [LoginController::class, 'create'])->middleware(['guest']);
Route::post('login', [LoginController::class, 'login'])->middleware(['guest']);
Route::post('logout', [LoginController::class, 'destroy'])->middleware(['auth']);
