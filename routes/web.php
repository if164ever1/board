<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BbsController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [BbsController::class, 'index'])->name('index');

// Route::get('/{bb:title}', [BbsController::class, 'detail'])->name('detail');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

