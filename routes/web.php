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

Route::get('/', [\App\Http\Controllers\FrontController::class, 'index']);

Route::prefix('admin')->middleware('auth')->name('admin.')->group(function () {
    Route::get('/', function () {
        return redirect()->route(auth()->check() ? 'admin.dashboard' : 'login');
    });
    Route::get('dashboard', [\App\Http\Controllers\Admin\MainController::class, 'dashboard'])->name('dashboard');
    Route::resource('event', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
});


require __DIR__ . '/auth.php';

Route::prefix('event')->name('event.')->group(function () {
    Route::get('/', [\App\Http\Controllers\EventController::class, 'index'])->name('index');
    Route::get('reservation/{event}', [\App\Http\Controllers\EventController::class, 'reservation'])->name('reservation');
    Route::post('reservation/{event}', [\App\Http\Controllers\EventController::class, 'sendReservation'])->name('sendReservation');
});

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\ContactController::class, 'send'])->name('send');
});


Route::get('/{slug}', [\App\Http\Controllers\FrontController::class, 'content'])->where('slug', '[a-z\-0-9]+');

