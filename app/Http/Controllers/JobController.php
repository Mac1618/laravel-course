<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // index
    public function index () {
        // lazy loading: sends extra queries for each related record.
        // $jobs = Job::all();

        // eager loading: fetches everything in fewer queries.
            // paginate: good for small amout of data 
            // simplePaginate: good for large amout of data
            // cusorPaginate: good for extremly large amout of data, but cannot be manipulated in url params
        $jobs = Job::with('employer')->latest()->simplePaginate(3);

        return view('jobs.index', ['jobs' => $jobs]);
    }

    // show
    public function show (Job $job) {
        // return job found based on id
        return view('jobs.show', ['job' => $job]);
    }

    // create
    public function create () {
        return view('jobs.create'); 
    }

    // store
    public function store () {
        // authenticate...

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
    }

    // edit
    public function edit (Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }

    // update
    public function update (Job $job) {
        // authorize (on hold...)

        // validate
        request()->validate([
            'salary' => ['string', 'required'],
            'title' => ['string', 'required', 'min:3']
        ]);

        // and persist
        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        // redirect
        return redirect('/jobs/' . $job->id);
    }

    // destroy
    public function destroy (Job $job) {
        // authorize (on hold...)

        // find delete the job and persist
        $job->delete();

        // redirect
        return redirect('/jobs');
    }
}
