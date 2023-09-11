<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('pages.auth.register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name'     => 'string|required',
            'email'    => 'string|required|unique:users,email',
            'cpf'      => 'string|required|unique:users,cpf',
            'password' => 'string|required',
            'role'     => 'numeric|required'
        ]);

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'cpf'      => $data['cpf'],
            'password' => bcrypt($data['password']),
            'role' => $data['role']
        ]);

        if($user){
            return redirect()->route("register");
        }
    }
}
