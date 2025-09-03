<?php

use App\Models\Job;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', ['jobs' => Job::all()]);
});

Route::get('/job/{id}', function ($id) {
    // laravel method find 1st match in array
    $job = Job::findId($id);

    // return job found based on id
    return view('job', ['job' => $job]);
});

Route::get('/about', function() {
    return view('about');
});