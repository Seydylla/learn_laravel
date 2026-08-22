<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class JobController extends Controller
{
    public function index() {
        //  This reduces query times and just use one time query

        $job = Job::with('employer')->latest()->simplePaginate(3);
        // $job = Job::with('employer')->cursorPaginate(3); //  This is datas which we don't need to show the number of page link
        return view('jobs.index', [
            'jobs' => $job
        ]);
    }

    public function create() {
        return view('jobs.create');
    }

    public function show(Job $job) {
        return view('jobs.show', ['job' => $job]);
    }

    public function store() {
        //  Validate

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);


        Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1
        ]);

        return redirect('/jobs');
    }

    public function edit(Job $job) {


        Gate::authorize('edit-job', $job);

        return view('jobs.edit', ['job' => $job]);
    }

    public function update(Job $job) {
        //  validate

        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);
        //  authorize (on hold ...)

        $job->update([
            'title' => request('title'),
            'salary' => request('salary')
        ]);

        return redirect('/jobs/' . $job->id);
    }

    public function destroy(Job $job) {
        $job->delete();

        return redirect('/jobs');
    }
}
