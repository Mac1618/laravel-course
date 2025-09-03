<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$60,000'
            ],
            [
                'id' => 2,
                'title' => "Teacher",
                'salary' => '$35,000'
            ],
            [
                'id' => 3,
                'title' => 'Communication Development',
                'salary' => '$85,000'
            ]
        ]
    ]);
});

Route::get('/job/{id}', function ($id) {

    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'salary' => '$60,000'
        ],
        [
            'id' => 2,
            'title' => "Teacher",
            'salary' => '$35,000'
        ],
        [
            'id' => 3,
            'title' => 'Communication Development',
            'salary' => '$85,000'
        ]
    ];

    // laravel method find 1st match in array
    $job = Arr::first($jobs, fn($job) => $job['id'] === (int) $id);
    // dd($job);

    // return job found based on id
    return view('job', ['job' => $job]);
});

Route::get('/about', function() {
    return view('about');
});