<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/items', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create');

Route::post('/items', [ItemController::class, 'store'])->name('items.store');
