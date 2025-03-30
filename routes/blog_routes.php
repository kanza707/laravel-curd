<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/create',[BlogController::class,'create'])->name('blog.create');
Route::post('/',[BlogController::class,'store'])->name('blog.store');
Route::get('/index',[BlogController::class,'index'])->name('blog.index');
Route::get('/{id}/edit',[BlogController::class,'edit'])->name('blog.edit');
Route::patch('/{id}/update',[BlogController::class,'update'])->name('blog.update');
Route::delete('/{id}/destroy',[BlogController::class,'destroy'])->name('blog.delete');




