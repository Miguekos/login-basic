<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('users.index',compact('user'));
    }

    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    public function update(Request $request, $user)
    {
      $users  = User::findOrFail($user);
      $input = $request->all();
      $users->fill($input)->save();
      return redirect()->route('user.index')->with('flash','Se actualizo el empleado correctamente');
    }
}
