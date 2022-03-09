<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\provinsi;
use Illuminate\Http\Request;

class CitiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> citi::paginate(10)];
        return view('dashboard.regional.regional',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param=['data'=>provinsi::all()];
        return view('dashboard.regional.form_regional',$param);
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
            'max' => ':attribute maksimal :max karakter',
        ];
        $request->validate([
            'provinsi' => 'required',
            'kota' => 'required',
        ],$messages);
        try {
            $ongkir = new citi();
            $ongkir->nama_kota= $request->nama_kota;
            $ongkir->id_provinsi= $request->provinsi;
            $ongkir->provinsi = provinsi::find($request->provinsi)->nama;
            $ongkir->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data'.$th->getMessage()]);
        }

        return redirect('/ongkir')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\citi  $citi
     * @return \Illuminate\Http\Response
     */
    public function show(citi $citi)
    {
        return citi::find($citi->id);   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\citi  $citi
     * @return \Illuminate\Http\Response
     */
    public function edit(citi $citi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\citi  $citi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, citi $citi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\citi  $citi
     * @return \Illuminate\Http\Response
     */
    public function destroy(citi $citi)
    {
        //
    }

    public function getAllCiti()
    {
        return $citi = citi::all();
    }
}
