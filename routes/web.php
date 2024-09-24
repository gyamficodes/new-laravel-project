<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
// use App\Models\job;
// use App\Models\post;


// Route::get('/', function () {
//     //   $jobs = job::all();
//     //    $posts = post::all();
//     //    dd($posts);
//     //    dd($jobs);
//     return view('home');
// });

Route::view('/', 'Home');
Route::view('/contact', 'contact');
Route::resource('jobs', JobController::class);

