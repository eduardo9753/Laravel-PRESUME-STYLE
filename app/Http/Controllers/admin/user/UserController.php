<?php

namespace App\Http\Controllers\admin\user;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    //

    public function index()
    {
        $users = User::all();

        return view('admin.user.index', [
            'users' => $users
        ]);
    }

   //para asignarle una funcion al usuario
   public function edit(User $user)
   {
       $roles = Role::all();
       return view('admin.user.edit', [
           'user' => $user,
           'roles' => $roles
       ]);
   }

   public function update(User $user, Request $request)
   {
       $user->roles()->sync([$request->role]); // Usamos sync() con un array de un solo elemento
       return redirect()->route('admin.user.edit', $user)->with('exito', 'Rol asignado correctamente al usuario');
   }
}
