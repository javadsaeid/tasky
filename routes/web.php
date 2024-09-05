<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::view("/", 'home');
Route::view("/about", 'about');
Route::view('/contact', 'contact');

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);


Route::get('test', function () {
    $mail = \Illuminate\Support\Facades\Mail::class;
    $mail::to('javadsaeid8@gmail.com')->send(new \App\Mail\JobPosted());
   return "this route is test";
});
