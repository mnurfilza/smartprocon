<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\ongkir;
use App\Models\ongkos_pasang;
use App\Models\type_barang;
use Illuminate\Http\Request;

class OngkosPasangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data' => ongkos_pasang::paginate(10)];
        return view('dashboard.ongkos_pasang.ongkos_pasang', $param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = ['regional' => citi::all(), 'type_barang' => type_barang::all()];
        return view('dashboard.ongkos_pasang.form_ongkos_pasang', $param);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'max' => ':attribute maksimal :max karakter',
        ];
        $request->validate([
            'price' => 'required|max:50',
        ], $messages);

        try {
            $kota = explode("-", $request->input('kota'));

            if (ongkos_pasang::where('id_kota', $kota[0])->where('type_barang', $request->type_barang)->exists()) {
                throw new \Exception("Data Already Exists");
            }
            $citi = citi::find($kota[0]);
            $ongpas = new ongkos_pasang();
            $ongpas->id_kota = $citi->id;
            $ongpas->kota = $citi->nama_kota;
            $ongpas->provinsi = $citi->provinsi;
            $ongpas->harga = $request->price;
            $ongpas->type_barang = $request->type_barang;
            $ongpas->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data  : ' . $th->getMessage()]);
        }

        return redirect('/ongkos_pasang')->with('success', 'Berhasil menambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\ongkos_pasang $ongkos_pasang
     * @return \Illuminate\Http\Response
     */
    public function show(ongkos_pasang $ongkos_pasang)
    {
        return ongkos_pasang::find($ongkos_pasang->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\ongkos_pasang $ongkos_pasang
     * @return \Illuminate\Http\Response
     */
    public function edit(ongkos_pasang $ongkos_pasang)
    {


        $param = ['old' => $this->show($ongkos_pasang)];

        return view('dashboard.ongkos_pasang.form_ongkos_pasang', $param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ongkos_pasang $ongkos_pasang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ongkos_pasang $ongkos_pasang)
    {
        $messages = [
            'required' => ':attribute wajib diisi',
            'max' => ':attribute maksimal :max karakter',
        ];
        $validaateData = $request->validate([
            'harga' => 'required|max:50',
        ], $messages);


        try {
            ongkos_pasang::where('id', $ongkos_pasang->id)->update($validaateData);
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', $th->getMessage()]);
        }

        return redirect('/ongkos_pasang')->with('success', 'Berhasil mengubah data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\ongkos_pasang $ongkos_pasang
     * @return \Illuminate\Http\Response
     */
    public function destroy(ongkos_pasang $ongkos_pasang)
    {
        ongkos_pasang::destroy($ongkos_pasang->id);
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }

    public function getOngkosPasangByCity(ongkos_pasang $ongkos_pasang)
    {
        return ongkos_pasang::where('id_kota', $ongkos_pasang->id_kota)->first();
    }

    public function getOngkosPasangByCityAndTipebarang(ongkos_pasang $ongkos_pasang)
    {
        return ongkos_pasang::where('id_kota', $ongkos_pasang->id_kota)
        ->where('type_barang', $ongkos_pasang->type_barang)
        ->first();
    }
}
