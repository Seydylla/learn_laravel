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

Route::post('/jobs', [JobController::class, 'store']);

Route::get('/jobs/{job}', [JobController::class, 'show']);

Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

Route::patch('/jobs/{job}', [JobController::class, 'update']);

Route::delete('/jobs/{job}', [JobController::class, 'destroy']);

//  If put here(under of the parent conn, it will be give an error. We will have to put above of that)
// Route::get('/jobs/create', function () {
//     return view('...');
// });

Route::get('/contact', function () {
    return view('contact');
});
