<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class OwnerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function checkowner(User $user)
    {
        return ($user->role->name == "owner" ? Response::allow() : Response::deny('Hanya owner yang bisa mengakses menu ini!'));
    }
}
