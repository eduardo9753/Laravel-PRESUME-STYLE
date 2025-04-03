<?php

namespace App\Http\Controllers\admin\role;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class RoleController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        //$this->middleware('can:lista roles');
    }

    public function index()
    {
        $roles = Role::all();
        return view('admin.role.index', [
            'roles' => $roles
        ]);
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.role.create', [
            'permissions' => $permissions
        ]);
    }

    public function store(Request $request)
    {
        //validaciones
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
        ]);

        //CREANDO EL NUEVO PERMISOS
        $permisos = Permission::create([
            'name' => $request->name,
        ]);

        if ($permisos) {
            return redirect()->route('admin.permissions.create')->with('exito', 'datos guardados correctamente');
        } else {
            return redirect()->route('admin.permissions.create')->with('exito', 'datos no correctamente');
        }
    }

    public function edit(Role $role, Request $request)
    {
        $permissions = Permission::all();
        return view('admin.role.edit', [
            'permissions' => $permissions,
            'role' => $role
        ]);
    }

    public function update(Role $role, Request $request)
    {
        //validaciones
        $this->validate($request, [
            'name' => 'required|min:3|max:30',
            'permissions' => 'required'
        ]);
        $role->update(['name' => $request->name]);

        //metodo sync sincroniza los roles que se mandan
        $role->permissions()->sync($request->permissions);

        return redirect()->route('admin.roles.edit', $role)->with('exito', 'permisos asignados correctamente');;
    }

    public function destroy(Role $role)
    {
        $role->delete();
        return redirect()->route('admin.roles.index')->with('exito', 'datos eliminado correctamente');
    }
}
