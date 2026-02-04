<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = session('ideas', []);
    return view('ideas', [
        'ideas' => $ideas
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');
    if (!empty($idea)) {
        session()->push('ideas', $idea);
    }

    return redirect('/');
});

// temp delete route
Route::get('/delete-ideas', function () {
    session()->forget('ideas');
    return redirect('/');
});
