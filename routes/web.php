<?php

use App\Models\Job;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){

    //  This reduces query times and just use one time query

    $job = Job::with('employer')->paginate(3);
    return view('jobs', [
        'jobs' => $job
    ]);
});

Route::get('/jobs/{id}', function ($id){

    $job = Job::find($id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
