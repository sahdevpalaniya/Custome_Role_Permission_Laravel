<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;

class RolePermissionController extends Controller
{
    public function index()
    {
        $admin = User::whereName('User')->first();
        $admin_role = Role::whereName('User')->first();

        // role check
        // if ($admin->hasRole('User')) {
        //     dd("yes");
        // } else {
        //     abort(403);
        // }

        //assign role to user
        // $admin->roles()->attach($admin_role);

        dd($admin->roles->toArray());

    }
}
