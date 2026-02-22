<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIdeaRequest;
use App\Models\Idea;
use App\Notifications\IdeaPublished;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class IdeaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('ideas.index', [
            'ideas' => Auth::user()->ideas,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIdeaRequest $request)
    {
        $user = Auth::user();
        $idea = $user->ideas()->create([
            'description' => $request->input('description'),
            'state' => 'pending',
        ]);

        // notify the user that their idea has been created
        $user->notify(new IdeaPublished($idea));

        return redirect('/ideas');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        /*
         * one way to use gates in the controller method
         * Gate::authorize('create', Idea::class);
         */
        return view('ideas.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Idea $idea)
    {
        /*
         * one was to use gates in the controller method
         * Gate::authorize('view', $idea);
         * or
         * if (!Gate::allows('view', $idea)) {
         *     abort(403);
         * }
         * */

        /*
         * another way to use gates is to use policies and the can method on the user model
         * this will automatically call the view method on the IdeaPolicy class and pass in the user
        if (Auth::user()->cannot('update', $idea)) {
            dd('User cannot update this idea');
        }
        */

        Gate::authorize('update', $idea);

        return view('ideas.show', [
            'idea' => $idea,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Idea $idea)
    {
        Gate::authorize('update', $idea);
        return view('ideas.edit', [
            'idea' => $idea,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreIdeaRequest $request, Idea $idea)
    {
        Gate::authorize('update', $idea);
        $idea->update($request->validated());

        return redirect("/ideas/$idea->id");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Idea $idea)
    {
        Gate::authorize('update', $idea);
        $idea->delete();

        return redirect('/ideas');
    }
}
