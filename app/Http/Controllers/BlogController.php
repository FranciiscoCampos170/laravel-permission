<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{

    public function getAllRoles()
    {
        $roles = Role::all();
        return view('roles.index', ['roles'=>$roles]);
    }
    public function createRole()
    {
        return view('roles.create');
    }

    public function addRole(Request $request)
    {
        $this->validate($request, [
            'role' => 'required|unique:roles,name'
            ]);

        $role = Role::create(['name' => $request->input('role')]);
        return redirect()->route(   'get.all.roles');
    }

    public function assingRole()
    {
        $roles = Role::all();
        $users = User::all();
        return view('roles.addrole', ['roles' => $roles, 'users'=>$users]);
    }
    public function addPermission()
    {
        $permission = Permission::create(['name' => 'manage-roles']);
    }

    public function givePermissionToRole($id)
    {
        $role = Role::findById($id);
        $permission = Permission::findById(3);
        $role->givePermissionTo($permission);
    }

    public function giveRoleToUser()
    {
        $user = User::findOrFail(1);
        $user->assignRole('collaborator');
    }

    public function getUserPermission()
    {
        $user = User::findOrFail(1);
        return $permissionNames = $user->getRoleNames();
    }

    public function getPostByUser()
    {
        return $user = User::with(['posts'])->findOrFail(1);
    }
}
