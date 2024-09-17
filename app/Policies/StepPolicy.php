<?php

namespace App\Policies;

use App\Models\Admin\Step;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StepPolicy
{
    use HandlesAuthorization;

    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }


    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->userCanDo('Step', 'browse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Step  $step
     * @return mixed
     */
    public function view(User $user, Step $step)
    {
        return $user->userCanDo('Step', 'read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->userCanDo('Step', 'add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Step  $step
     * @return mixed
     */
    public function update(User $user, Step $step)
    {
        return $user->userCanDo('Step', 'edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Step  $step
     * @return mixed
     */
    public function delete(User $user, Step $step)
    {
        return $user->userCanDo('Step', 'delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Step  $step
     * @return mixed
     */
    public function restore(User $user, Step $step)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Step  $step
     * @return mixed
     */
    public function forceDelete(User $user, Step $step)
    {
        return true;
    }
}
