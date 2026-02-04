<?php

use App\Models\Idea;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $ideas = Idea::query()->when(request('state'), function ($query, $state) {
        $query->where('state', $state);
    })->get();

    return view('ideas', [
        'ideas' => $ideas,
    ]);
});

Route::post('/ideas', function () {
    Idea::create([
        'description' => request('idea'),
        'state' => 'pending',
    ]);

    return redirect('/');
});

// temp delete route
Route::get('/delete-ideas', function () {
    // delete all ideas
    Idea::query()->delete();

    return redirect('/');
});
