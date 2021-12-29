<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.user',['data'=>user::all()]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.user.form_user');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' =>'required',
        ],$messages);

        try {

            $user = new user();
            $user->name = $request->input('name');
            $user->password = bcrypt($request->input('password'));
            $user->email = $request->input('email');
            $user->users_role = "ADMIN";
            $user->save();

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        //store normaly
        return redirect('/user')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        //
        return user::where('id',$user->id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(user $user)
    {
        $param =['old'=> $this->show($user)]; 
        return view('dashboard.user.form_user',$param);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, user $user)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $validateData =$request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' =>'required',
        ],$messages);

        try {

            user::where('id',$user->id)->update($validateData);
            

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        //store normaly
        return redirect('/user')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(user $user)
    {
        try {
            if (Auth::user()->email == $user->email) {
                return back()->withErrors(['error', 'Anda tidak bisa menghapus akun anda sendiri']);
            } 
            user::where('id',$user->id)->delete();
        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        return redirect()->back()->with('success', 'Berhasil menghapus data');

    }
}
