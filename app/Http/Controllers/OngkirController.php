<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\ongkir;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $param = ['data'=> ongkir::paginate(10)];
       return view('dashboard.ongkir.ongkir',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = ['regional'=>citi::all()];
        return view('dashboard.ongkir.form_ongkir',$param);
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
            'kota' => 'required',
            'price' => 'required|max:255',
        ],$messages);
        try {
            $kota = explode("-", $request->input('kota'));

            //check if exists
            if (ongkir::where('id_kota',$kota[0])->exists()) {
                throw new \Exception("Data Already Exists");
            }



            $ongkir = new ongkir();
            $ongkir->id_kota= $kota[0];
            $ongkir->kota = citi::find($kota[0])->nama_kota;
            $ongkir->price = $request->price;
            $ongkir->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data :'.$th->getMessage()]);
        }

        return redirect('/ongkir')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function show(ongkir $ongkir)
    {
        return ongkir::find($ongkir->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function edit(ongkir $ongkir)
    {
        $param =['old'=> $this->show($ongkir)];
        return view('dashboard.ongkir.form_ongkir',$param);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ongkir $ongkir)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
            'max' => ':attribute maksimal :max karakter',
        ];
         $validaateData = $request->validate([
            'price' => 'required|max:255',
        ],$messages);


        try {
            ongkir::where('id',$ongkir->id)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/ongkir')->with('success', 'Berhasil mengubah data');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ongkir  $ongkir
     * @return \Illuminate\Http\Response
     */
    public function destroy(ongkir $ongkir)
    {
        ongkir::destroy($ongkir->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function searchOngkirByCity(ongkir $ongkir){
        return ongkir::where('id_kota', $ongkir->id_kota)->first();
    }




}
