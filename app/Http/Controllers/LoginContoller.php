<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginContoller extends Controller
{
     public function process_login(Request $request)
     {
        $credentials =  $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


       
        // $user = User::where('username',$request->username)->first();

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect('/customer');
        }
        return redirect('admin')->withErrors(['error',"Akun tidak dikenal"]);
        
     }


     public function logout(){
         Auth::logout();

         request()->session()->invalidate();

         request()->session()->regenerateToken();

         return redirect('/admin');
     }
}
