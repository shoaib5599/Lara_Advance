<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    public function created(User $user)
    {
        // Logic to perform when a user is created
    }

    public function updated(User $user)
    {
        // Logic to perform when a user is updated
    }

    public function deleted(User $user)
    {
        // Logic to perform when a user is deleted
    }

    /**
     * Handle the User "restored" event.
     */
    public function restored(User $user): void
    {
        //
    }

    /**
     * Handle the User "force deleted" event.
     */
    public function forceDeleted(User $user): void
    {
        //
    }
}
