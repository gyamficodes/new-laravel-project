<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home' );
});


Route::get('/jobs', function () {
    return  view("jobs", ["jobs" => [
        [
            "title" => "Director",
             "salary" => "$50,000"
        ],
        [
            "title" => "Deveeloper",
             "salary" => "$20,000"
        ],
        [
            "title" => "Teacher",
             "salary" => "$10,000"
        ],
    ]]);
});



Route::get('/contact', function () {
    return  view("contact");
});
