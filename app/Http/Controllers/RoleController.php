<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function show(){
        $roles = Role::all();
        return view('show.home', compact('roles'));
    }
}
