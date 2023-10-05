<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'role'     => 'numeric|required',
            'image'    => 'image|required'
        ]);

        // Upload de imagem
        $imageName = 'undefined';
        if($request->hasFile('image') && $request->file('image')->isValid()){
            $requestImage = $request->image;
            //dd($requestImage);
            $extension = $requestImage->getClientOriginalExtension();

            $imageName = md5($requestImage->getClientOriginalName().strtotime("now")).".".$extension;
            
            $request->image->move(public_path('img/pics'), $imageName);
        }

        $user = User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'cpf'      => $data['cpf'],
            'password' => bcrypt($data['password']),
            'role'     => $data['role'],
            'image'    => $imageName 
        ]);

        if($user){            
            return redirect()->route("register");
        }
    }
}
