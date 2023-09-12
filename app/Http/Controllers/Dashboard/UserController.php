<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('pages.dashboard.listUsers', ['users'=>$users]);
    }

    public function edit(Request $request, $id){
        $user = User::where('id', $id)->first();
        return view('pages.dashboard.updateUser', ['user'=>$user]);
    }

    public function update(Request $request, $id){
        
        //dd($request);

        $user = User::find($id)->update($request->all());


        if($user){
            return redirect()->back();
        }
    }

    public function delete(Request $request, $id){
        $user = User::find($id)->delete();

        if($user){
            return redirect()->route("list-users");
        }
    }
}
