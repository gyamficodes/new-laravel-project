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



//index = show all jobs
Route::get('/jobs', function () {
    // $job = job::with("employer")->get();

    // $job = job::with("employer")->paginate(4);
    $job = job::with("employer")->latest()->paginate(4); // lates means that every job we create should push to fist.
    return  view("jobs.index", ["jobs" => $job]);
});

//create = cretae jobs
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//show
Route::get('/jobs/{job}', function (job $job) {
    return view("jobs.show", ["job" => $job]);
});


//store job in db
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


//edit 
Route::get('/jobs/{job}/edit', function (job $job) {
    return view("jobs.edit", ["job" => $job]);
});


// update
Route::patch('/jobs/{job}', function (job $job) {
    // Validate 
    request()->validate([
        "title" => ["required", "min:3"],
        "salary" => ["required"],
    ]);

    // Find the job


    // Update the job
    $job->update([
        "title" => request("title"),
        "salary" => request("salary"),
    ]);

    // Redirect to the job page
    return redirect('/jobs'); // Corrected: Removed $job->$id
});

//destroy or delete 
Route::delete('/jobs/{job}', function (job $job) {
    //Authorize (...on hold)

    //delete job
    $job->delete();
    //redirect to jobs
    return redirect('/jobs')->with('success', 'Job deleted successfully.');
});



Route::get('/contact', function () {
    return  view("contact");
});
