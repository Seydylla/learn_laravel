<?php

use App\Models\Job;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function (){

    $job = Job::all();
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
