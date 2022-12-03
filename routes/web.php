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
    Route::resource('event', \App\Http\Controllers\Admin\EventController::class);
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class)->except(['destroy']);
    Route::delete('gallery/{image}', [\App\Http\Controllers\Admin\GalleryController::class, 'destroy'])->name('gallery.destroy');
    Route::resource('disc', \App\Http\Controllers\Admin\DiscController::class);
    Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
    Route::resource('content', \App\Http\Controllers\Admin\ContentController::class)
        ->except([
            'create',
            'store',
            'destroy',
            'show',
        ])->where([
            'content' => '[a-z\-0-9]+'
        ]);
});


require __DIR__ . '/auth.php';

Route::prefix('concerts-reservations')->name('event.')->group(function () {
    Route::get('/', [\App\Http\Controllers\EventController::class, 'index'])->name('index');
    Route::get('reservation/{event}', [\App\Http\Controllers\EventController::class, 'reservation'])->name('reservation');
    Route::post('reservation/{event}', [\App\Http\Controllers\EventController::class, 'sendReservation'])->name('sendReservation');
});

Route::get('galerie', [\App\Http\Controllers\GalleryController::class, 'index'])->name('gallery.index');
Route::get('discographie', [\App\Http\Controllers\DiscController::class, 'index'])->name('disc.index');

Route::prefix('contact')->name('contact.')->group(function () {
    Route::get('/', [\App\Http\Controllers\ContactController::class, 'index'])->name('index');
    Route::post('/', [\App\Http\Controllers\ContactController::class, 'send'])->name('send');
});


Route::get('/{slug}', [\App\Http\Controllers\FrontController::class, 'content'])->where('slug', '[a-z\-0-9]+');

