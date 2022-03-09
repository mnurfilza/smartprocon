<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\type_barang;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=> product::paginate(10)];
        return view('dashboard.barang.barang',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $param = ["type_barang"=>type_barang::all()];
        return view('dashboard.barang.form_barang',$param);    
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
            'kode_barang'=>'required|max:100',
            'nama_barang' => 'required|max:100',
            'berat_barang' => 'required|max:10',
            'garansi' => 'required|max:10',
            'description' => 'required|max:255',


        ],$messages);

       
        try {

            $tipeBarang = new type_barang;
            $tipeBarang->id = $request->tipe_barang;
            $newCtrlBarang = new TypeBarangController;
            $brg = new product;
            $brg->sku = $request->kode_barang;
            $brg->nama= $request->nama_barang;
            $brg->berat_barang= $request->berat_barang;
            $brg->type_barang= $newCtrlBarang->show($tipeBarang)->type_barang;
            $brg->garansi= $request->garansi;
            $brg->harga_satuan = $request->price;
            $brg->description = $request->description;
            $brg->createBy = "";
            $brg->updateBy = "";
            $brg->save();

        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error', 'Gagal menambahkan data'.$th->getMessage()]);
        }

        return redirect('/product')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        return product::where('sku',$product->sku)->first();
    }
   
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function delete(string $sku)
    {
        product::where('sku',$sku)->delete();
        return redirect()->back()->with('success', 'Berhasil menghapus data');
    }
}
