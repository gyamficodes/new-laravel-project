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
// Route::resource('jobs', JobController::class)->middleware('auth');
//index = show all jobs
Route::get('/jobs', [JobController::class, "index"]);
//create = cretae jobs
Route::get('/jobs/create', [JobController::class, "create"]);
//show
Route::get('/jobs/{job}', [JobController::class, "show"]);
//store job in db
Route::post('/jobs', [JobController::class, "store"])->middleware('auth');
//edit 
Route::get('/jobs/{job}/edit', [JobController::class, "edit"])->middleware('auth')->can('edit', 'job');
// update
Route::patch('/jobs/{job}', [JobController::class, "update"]);
//destroy or delete 
Route::delete('/jobs/{job}', [JobController::class, "delete"]);








//Auth
Route::get('/register', [RegisterUserController::class, 'create']);
Route::post('/register', [RegisterUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);