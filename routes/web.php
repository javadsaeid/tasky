<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs = Job::with('employer')->with('tags')->latest()->cursorPaginate(10);
    return view('jobs.index', ['jobs' => $jobs]);
});

// create job
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

// show job
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', ['job' => $job]);
});

// store job
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect("/")->with('success', 'new job created successfully');
});

// edit job
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', ['job' => $job]);
});

// update
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
       'title' => ['required', 'min:3'],
       'salary' => ['required']
    ]);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/'.$job->id."/edit")->with('success', 'job updated successfully');
});

// delete
Route::delete('/jobs/{job}', function (Job $job) {
    $job->delete();
    return redirect('/jobs');
});

Route::get("/about", function () {

    return view('about');
});

Route::get('/contact', function () {
   return view('contact');
});


