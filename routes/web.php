<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MobileEntryController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mobile-entries', [MobileEntryController::class, 'index'])->name('mobile-entries.index');
Route::post('/mobile-entries', [MobileEntryController::class, 'store'])->name('mobile-entries.store');