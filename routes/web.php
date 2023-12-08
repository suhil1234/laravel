<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminEventController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\VideoController;

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
Route::get('/events', [EventController::class, 'index'])->name('events.index');
Route::get('/events/{event}', [EventController::class, 'show'])->name('events.show');
Route::resource('videos', VideoController::class)->only(['index', 'create', 'store']);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.home');
    Route::get('/events/create', [AdminEventController::class, 'create'])->name('events.create');
    Route::post('/events', [AdminEventController::class, 'store'])->name('events.store');
    Route::delete('/events/{event}', [AdminEventController::class, 'destroy'])->name('events.destroy');
});