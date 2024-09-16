<?php

use Illuminate\Support\Facades\Route;
use App\Models\job;
use App\Models\post;


Route::get('/', function () {
    //   $jobs = job::all();
    //    $posts = post::all();
    //    dd($posts);
    //    dd($jobs);
    return view('home');
});




Route::get('/jobs', function () {
    // $job = job::with("employer")->get();
    
    // $job = job::with("employer")->paginate(4);
    $job = job::with("employer")->latest()->paginate(4); // lates means that every job we create should push to fist.
    return  view("jobs.index", ["jobs" => $job]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/{id}', function ($id) {
    $job = job::find($id);
    return view("jobs.show", ["job" => $job]);
});


Route::post('/jobs', function () {
    //   dd(request()->all());
    //Validation
    request()->validate([
        "title" => ["required", "min:3"],
        "salary" => ["required"],
    ]);
    
    Job::create([
        "title" =>  request("title"),
        "salary" => request("salary"),
        "employer_id" => 1
    ]);
    return redirect('/jobs');
});

Route::get('/contact', function () {
    return  view("contact");
});
