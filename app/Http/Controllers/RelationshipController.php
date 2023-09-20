<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;
use App\Models\User;

class RelationshipController extends Controller
{
    public function index()
    {
        $user = User::find(1);
        $roles = Role::find(1);
        dd($user);
        $user->roles()->attach($roles);
    }
}
