<?php

namespace App\Policies;

use App\Models\Oneroute;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class OneroutePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Oneroute $oneroute): bool
    {
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Oneroute $oneroute): bool
    {
        return $oneroute->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Oneroute $oneroute): bool
    {
        return $oneroute->user()->is($user);

        return true;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Oneroute $oneroute): bool
    {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Oneroute $oneroute): bool
    {
        return false;
    }
}
