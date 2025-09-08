<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// show
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

// create
Route::get('/jobs/create', function () {
    // return redirect('/jobs');
    return view('jobs.create'); 
});

// show by id jobs
Route::get('/jobs/{id}', function ($id) {
    // laravel method find 1st match in array
    $job = Job::find($id);

    // return job found based on id
    return view('jobs.show', ['job' => $job]);
});

// store jobs 
Route::post('/jobs', function () {
    
    request()->validate([
        'title' => ['string', 'required', 'min:3'],
        'salary' => ['string', 'required']
    ]);


    Job::create([
        'salary' => request('salary'),
        'title' => request('title'),
        'employer_id' => 1
    ]);
    
    return redirect('/jobs');
});

// Edit by id
Route::get('/jobs/{id}/edit', function ($id) {
    // laravel method find 1st match in array
    $job = Job::find($id);

    // return job found based on id
    return view('jobs.edit', ['job' => $job]);
});

// Update
Route::patch('/jobs/{id}', function ($id) {
    // validate
    request()->validate([
        'salary' => ['string', 'required'],
        'title' => ['string', 'required', 'min:3']
    ]);

    // authorize (on hold...)

    // find update the job
    $job = Job::findOrFail($id);

    // and persist
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    // redirect
    return redirect('/jobs/' . $job->id);
});

// Destroy
Route::delete('/jobs/{id}', function ($id) {
    // authorize (on hold...)

    // find delete the job and persist
    Job::findOrFail($id)->delete();

    // redirect
    return redirect('/jobs');
});



Route::get('/about', function() {
    return view('about');
});