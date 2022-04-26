<?php

use App\Http\Controllers\AdminMangmentController;
use Illuminate\Support\Facades\Route;

Route::resource('admin', AdminMangmentController::class);
Route::get('loginUser',[AdminMangmentController::class,'loginUser'])->name('admin.loginUser');