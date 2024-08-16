<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;



Route::get('/', function () {
    return view('home' );
});


Route::get('/jobs', function () {
    return  view("jobs", ["jobs"=> job::all()]);
});

Route::get('/jobs/{id}', function ($id) {
   
    $job = \Illuminate\Support\Arr::first(job::all(), fn($job) => $job["id"] == $id);

 
    return view("job", ["job" => $job]);
});


Route::get('/contact', function () {
    return  view("contact");
});
