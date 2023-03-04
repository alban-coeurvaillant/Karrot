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

Route::get('/', [\App\Http\Controllers\FrontController::class, 'index'])->name('home');

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route(auth()->check() ? 'admin.dashboard' : 'login');
    });
    Route::get('dashboard', [\App\Http\Controllers\Admin\MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->except(['destroy']);
    Route::delete('gallery/{image}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery.destroy');
});


require __DIR__ . '/auth.php';


Route::get('galerie', [\App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');
