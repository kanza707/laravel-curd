<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;



Route::get('/create', [RegisterController::class,'create'])->name('registration.create');
Route::post('/', [RegisterController::class,'store'])->name('registration.store');
Route::get('/',[RegisterController::class,'index'])->name('registration.index');
Route::get('{id}/edit',[RegisterController::class,'edit'])->name('registration.edit');
Route::patch('{id}/update',[RegisterController::class,'update'])->name('registration.update');
Route::delete('{id}/destroy',[RegisterController::class,'destroy'])->name('registration.delete');

