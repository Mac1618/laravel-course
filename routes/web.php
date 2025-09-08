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
        // paginate: good for small amout of data 
        // simplePaginate: good for large amout of data
        // cusorPaginate: good for extremly large amout of data, but cannot be manipulated in url params
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', ['jobs' => $jobs]);
});

Route::get('/jobs/create', function () {
    // return redirect('/jobs');
    return view('jobs.create'); 
});

Route::post('/jobs', function () {

    Job::create([
        'salary' => request('salary'),
        'title' => request('title'),
        'employer_id' => 1
    ]);
    
    return redirect('/jobs');
});

Route::get('/job/{id}', function ($id) {
    // laravel method find 1st match in array
    $job = Job::find($id);

    // return job found based on id
    return view('jobs.show', ['job' => $job]);
});

Route::get('/about', function() {
    return view('about');
});