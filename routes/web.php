<?php

use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
 

 

Route::prefix('register')->group(function () {
    require __DIR__.'/register_routes.php';
});

 
 Route::prefix('student')->group(function(){
    require __DIR__.'/student_routes.php';
 });
 Route::prefix('blog')->group(function(){
    require __DIR__.'/blog_routes.php';

 });