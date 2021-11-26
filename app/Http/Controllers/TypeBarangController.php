<?php

namespace App\Http\Controllers;

use App\Models\type_barang;
use Illuminate\Http\Request;

class TypeBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> type_barang::all()];
       return view('dashboard.tipe_barang.type_barang',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('dashboard.tipe_barang.form_type_barang');    
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
            'tipe_barang' => 'required',
            'keterangan' => 'required',

        ],$messages);
        try {
            
            $tb = new type_barang();
            $tb->type_barang = $request->tipe_barang;
            $tb->keterangan = $request->keterangan;
            $tb->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data']);
        }

        return redirect('/type_barang')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\type_barang  $type_barang
     * @return \Illuminate\Http\Response
     */
    public function show(type_barang $type_barang)
    {
        return type_barang::find($type_barang->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\type_barang  $type_barang
     * @return \Illuminate\Http\Response
     */
    public function edit(type_barang $type_barang)
    {

        $param =['old'=> $this->show($type_barang)]; 
        return view('dashboard.tipe_barang.form_type_barang',$param);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\type_barang  $type_barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, type_barang $type_barang)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
        ];
         $validaateData = $request->validate([
            'type_barang' => 'required',
            'keterangan' => 'required',
        ],$messages);

       
        try {
            type_barang::where('id',$type_barang->id)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/type_barang')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\type_barang  $type_barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(type_barang $type_barang)
    {
        type_barang::destroy($type_barang->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
