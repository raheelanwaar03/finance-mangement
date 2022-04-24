<?php

use App\Http\Controllers\customerController;
use App\Http\Controllers\TrancationController;
use Illuminate\Support\Facades\Route;


Route::resource('user', customerController::class);

// tranction controller

Route::get('/user/addBalance/{id}',[TrancationController::class,'addBalance'])->name('user.addBalance');
Route::post('/user/balanceStore',[TrancationController::class,'balanceStore'])->name('user.balanceStore');
Route::get('/user/removeBalance/{id}',[TrancationController::class,'removeBalance'])->name('user.removeBalance');
Route:: post('/user/minusBalance',[TrancationController::class,'minusBalance'])->name('user.minusBalance');