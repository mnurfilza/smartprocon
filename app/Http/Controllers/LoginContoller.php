<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginContoller extends Controller
{
     public function process_login(Request $request)
     {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->except(['_token']);

        $user = User::where('username',$request->username)->first();

        if(auth()->attempt($credentials) && !empty($user)){
            return redirect('/dashboard');
        }else{
            
        }
     }
}
