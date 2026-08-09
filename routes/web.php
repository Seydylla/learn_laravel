<?php

$jobs = [
    [
        'id' => 1,
        'title' => 'Director',
        'salary' => '$80,000'
    ],

    [
        'id' => 2,
        'title' => 'Sale Manager',
        'salary' => '$90,000'
    ],

    [
        'id' => 3,
        'title' => 'Programmer',
        'salary' => '$45,000'
    ]
];

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs){
    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});
