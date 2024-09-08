<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;
use App\Models\post;


Route::get('/', function () {
//   $jobs = job::all();
//    $posts = post::all();
//    dd($posts);
//    dd($jobs);
    return view('home' );
});


Route::get('/jobs', function () {
    $job = job::with("employer")->get();
    return  view("jobs", ["jobs"=> $job]);
});

Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);
    return view("job", ["job" => $job]);
});


Route::get('/contact', function () {
    return  view("contact");
});
