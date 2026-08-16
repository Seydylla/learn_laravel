<?php

use App\Models\Job;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){

    //  This reduces query times and just use one time query

    $job = Job::with('employer')->latest()->simplePaginate(3);
    // $job = Job::with('employer')->cursorPaginate(3); //  This is datas which we don't need to show the number of page link
    return view('jobs.index', [
        'jobs' => $job
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});

Route::post('/jobs', function () {

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
});

Route::get('/jobs/{id}/edit', function ($id){

    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

//  If put here(under of the parent conn, it will be give an error. We will have to put above of that)
// Route::get('/jobs/create', function () {
//     return view('...');
// });

Route::get('/contact', function () {
    return view('contact');
});
