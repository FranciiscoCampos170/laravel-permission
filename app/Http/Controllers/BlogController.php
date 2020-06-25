<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class BlogController extends Controller
{
    public function addRole()
    {
        $role = Role::create(['name' => 'collaborator']);
    }
    public function addPermission()
    {
        $permission = Permission::create(['name' => 'view-post']);
    }

    public function givePermissionToRole($id)
    {
        $role = Role::findById($id);
        $permission = Permission::findById(1);
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
