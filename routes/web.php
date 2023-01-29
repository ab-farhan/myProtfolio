<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BasicSettingsController;
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

Route::middleware(['auth'])->name('dashboard')->prefix('/dashboard')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/basicsettings', [BasicSettingsController::class, 'index'])->name('.basicsettings');
    Route::post('{basicSettings}/update-basicsettings', [BasicSettingsController::class, 'update'])->name('.update.basicsettings');
});

require __DIR__ . '/auth.php';
