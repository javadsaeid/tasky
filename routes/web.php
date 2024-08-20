<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = \App\Models\Job::all()->take(10);
    return view('home', ['jobs' => $jobs]);
});

Route::get("/about", function () {
    return view('about');
});

Route::get('/contact', function () {
   return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $job = \App\Models\Job::find($id);
    if (!$job) {
        abort(404,'job not found');
    }
   return view('job', ['job' => $job]);
});
