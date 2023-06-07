<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;


class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles', 'roles'));
    }

    public function edit(Role $role)
    {
        return view('admin.roles.edit', compact('role'));
    }

    public function update(Request $request, Role $role)
    {
        
        $request->validate([
            'name' => 'required',
        ]);
    
        $role->update([
            'name' => $request->name,
        ]);
    
        return redirect()->route('roles.index')->with('success'  ,'Product updated successfully');

    }
}
