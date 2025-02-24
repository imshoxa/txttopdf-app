<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TextController;
Route::get('/', [TextController::class, 'index'])->name('texts.index');
Route::post('/store', [TextController::class, 'store'])->name('texts.store');
Route::get('/export/{id}', [TextController::class, 'exportPdf'])->name('texts.export');

// Route::get('/', function () {
//     return view('welcome');
// });
