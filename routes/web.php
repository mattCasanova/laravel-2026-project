<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'tasks' => [
            'Go to the store',
            'Finish my screencast',
            'Clean the house'
        ],
    ]);
});
Route::view('/about', 'about');
Route::view('/contact', 'contact');
