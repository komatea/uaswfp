<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class EmployeePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function checkemployee(User $user)
    {
        if(($user->role->name == "employee" || $user->role->name == "owner") && $user->status != "suspended"){
            return Response::allow();
        }else{
            return Response::deny('Anda harus terdaftar sebagai pegawai dulu!');
        }
    }
}
