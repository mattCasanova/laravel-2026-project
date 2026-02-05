<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

// index route
Route::get('/ideas', function () {
    $ideas = Idea::all();

    return view('ideas.index', [
        'ideas' => $ideas,
    ]);
});

// show route
Route::get('/ideas/{idea}', function (Idea $idea) {
    return view('ideas.show', [
        'idea' => $idea,
    ]);
});

// edit route
Route::get('/ideas/{idea}/edit', function (Idea $idea) {
    return view('ideas.edit', [
        'idea' => $idea,
    ]);
});

// update route
Route::patch('/ideas/{idea}', function (Idea $idea) {
    $idea->update([
        'description' => request('description'),
    ]);

    return redirect("/ideas/{$idea->id}");
});

Route::post('/ideas', function () {
    $idea = Idea::create([
        'description' => request('description'),
        'state' => 'pending',
    ]);

    return redirect("/ideas/{$idea->id}");
});

// destroy route
Route::delete('/ideas/{idea}', function (Idea $idea) {
    $idea->delete();

    return redirect('/ideas');
});
