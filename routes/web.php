<?php

use App\Models\Job;

use App\Http\Controllers;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', [JobController::class, 'index']);

Route::get('/jobs/create', [JobController::class, 'create']);

Route::get('/jobs/{job}', [JobController::class, 'show']);

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

Route::get('/jobs/{job}/edit', function ( Job $job){

    return view('jobs.edit', ['job' => $job]);
});

Route::patch('/jobs/{job}', function (Job $job){
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
});

Route::delete('/jobs/{job}', function (Job $job){

    $job->delete();

    return redirect('/jobs');
});

//  If put here(under of the parent conn, it will be give an error. We will have to put above of that)
// Route::get('/jobs/create', function () {
//     return view('...');
// });

Route::get('/contact', function () {
    return view('contact');
});
