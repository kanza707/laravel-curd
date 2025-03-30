<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


Route::get('/create',[StudentController::class,'create'])->name('student.create');
Route::post('/',[StudentController::class,'store'])->name('student.store');
Route::get('/',[StudentController::class,'index'])->name('student.index');
Route::get('/{id}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::patch('/{id}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/{id}/destroy',[StudentController::class,'destroy'])->name('student.delete');



