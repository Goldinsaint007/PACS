<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\Messenger;
use App\Models\User;

class MessengerPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Messenger $messenger): bool
    {
        //
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Messenger $messenger): bool
    {
        return $messenger->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Messenger $messenger): bool
    {
        return $this->update($user, $messenger);
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Messenger $messenger): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Messenger $messenger): bool
    {
        //
    }
}
