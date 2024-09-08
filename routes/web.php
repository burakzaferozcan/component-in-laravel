<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::prefix("/admin")->group(function () {
    Route::get('/create-article', [ArticleController::class, "create"])->name('admin.create');
});


