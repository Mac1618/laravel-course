<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    // lazy loading: sends extra queries for each related record.
    // $jobs = Job::all();

    // eager loading: fetches everything in fewer queries.
    $jobs = Job::with('employer')->get();

    return view('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    // laravel method find 1st match in array
    $job = Job::find($id);

    // return job found based on id
    return view('job', ['job' => $job]);
});

Route::get('/about', function() {
    return view('about');
});