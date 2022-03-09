<?php

namespace App\Http\Controllers;

use App\Models\type_object;
use Illuminate\Http\Request;

class TypeObjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> type_object::paginate(10)];
        return view('dashboard.object.object',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.object.form_object');
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
            'max'=>':attribute maksimal :max karakter',

        ];
        $request->validate([
            'nama_object' => 'required|max:50',
            'keterangan' => 'required|max:100',
        ],$messages);
        try {

            if (type_object::where('nama_object',"=",$request->nama_object)->exists()) {
                throw new \Exception("Data Already Exists");
            }
            
            $tb = new type_object();
            $tb->nama_object = $request->nama_object;
            $tb->keterangan = $request->keterangan;
            $tb->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', $th->getMessage()]);
        }

        return redirect('/type_object')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type_object  $type_object
     * @return \Illuminate\Http\Response
     */
    public function show(type_object $type_object)
    {
        return type_object::find($type_object->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type_object  $type_object
     * @return \Illuminate\Http\Response
     */
    public function edit(type_object $type_object)
    {
        $param =['old'=> $this->show($type_object)]; 
        return view('dashboard.object.form_object',$param); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type_object  $type_object
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type_object $type_object)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'max'=>':attribute maksimal :max karakter',

        ];
        $validaateData=$request->validate([
            'nama_object' => 'required|max:50',
            'keterangan' => 'required|max:100',
        ],$messages);

       
        try {
            type_object::where('id',$type_object->id)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/type_object')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type_object  $type_object
     * @return \Illuminate\Http\Response
     */
    public function destroy(type_object $type_object)
    {
        type_object::destroy($type_object->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function GetAllData()
    {
        return type_object::all();
    }

  
}
