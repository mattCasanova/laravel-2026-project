<?php

namespace App\Policies;

use App\Models\Idea;
use App\Models\User;

class IdeaPolicy
{
    /**
     * Determine whether the user can update the model. d
     */
    public function update(User $user, Idea $idea): bool
    {
        return $user->is($idea->user);
    }

    // create
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    // view
    public function view(User $user, Idea $idea): bool
    {
        return $user->is($idea->user);
    }
}
