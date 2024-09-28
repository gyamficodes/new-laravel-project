<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Symfony\Component\HttpKernel\DependencyInjection\RegisterControllerArgumentLocatorsPass;

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

//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);