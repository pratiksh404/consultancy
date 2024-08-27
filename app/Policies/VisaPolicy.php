<?php

namespace App\Policies;

use App\Models\Admin\Visa;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class VisaPolicy
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
        return $user->userCanDo('Visa', 'browse');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Visa  $visa
     * @return mixed
     */
    public function view(User $user, Visa $visa)
    {
        return $user->userCanDo('Visa', 'read');
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->userCanDo('Visa', 'add');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Visa  $visa
     * @return mixed
     */
    public function update(User $user, Visa $visa)
    {
        return $user->userCanDo('Visa', 'edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Visa  $visa
     * @return mixed
     */
    public function delete(User $user, Visa $visa)
    {
        return $user->userCanDo('Visa', 'delete');
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Visa  $visa
     * @return mixed
     */
    public function restore(User $user, Visa $visa)
    {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Admin\Visa  $visa
     * @return mixed
     */
    public function forceDelete(User $user, Visa $visa)
    {
        return true;
    }
}
