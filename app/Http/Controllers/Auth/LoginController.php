<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest', ['only' => 'showLoginForm']);
    }


    public function showLoginForm()
    {
        return view('auth.login');

    }

    public function login()
    {

        $credenciales = $this->validate(request(), [
            $this->username() => 'required|string',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credenciales))
        {

            return redirect()->route('dashboard');

        }
        return back()
            ->withErrors([$this->username() => 'Email no se encuentra registrado'])
            ->withInput(request([$this->username()]));

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');

    }

    public function username()
    {
        return "email";
    }

}
