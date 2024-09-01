<?php

namespace App\Policies;

use App\Models\Admin\Candidate;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CandidatePolicy
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
        return $user->userCanDo('Candidate', 'browse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return mixed
     */
    public function view(User $user, Candidate $candidate)
    {
        return $user->userCanDo('Candidate', 'read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->userCanDo('Candidate', 'add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return mixed
     */
    public function update(User $user, Candidate $candidate)
    {
        return $user->userCanDo('Candidate', 'edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return mixed
     */
    public function delete(User $user, Candidate $candidate)
    {
        return $user->userCanDo('Candidate', 'delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return mixed
     */
    public function restore(User $user, Candidate $candidate)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Candidate  $candidate
     * @return mixed
     */
    public function forceDelete(User $user, Candidate $candidate)
    {
        return true;
    }
}
