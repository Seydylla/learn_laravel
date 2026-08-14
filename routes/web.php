<?php

use App\Models\Job;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){

    //  This reduces query times and just use one time query

    $job = Job::with('employer')->simplePaginate(3);
    // $job = Job::with('employer')->cursorPaginate(3); //  This is datas which we don't need to show the number of page link
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
