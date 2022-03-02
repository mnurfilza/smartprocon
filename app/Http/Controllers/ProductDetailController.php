<?php

namespace App\Http\Controllers;

use App\Models\type_barang;
use App\Models\product;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{

    public function productDetail(string $sku)
    {
    
        $productCtr = new ProductController();
        $product = new product();
        $product->sku = $sku;
        $prodExist = $productCtr->show($product);
        $param =['old'=> $prodExist, 'tipeBarang'=>type_barang::all()];
        return view('dashboard.barang.form_barang',$param);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function updateDetail(Request $request, $sku)
    {

        $messages = [
            'required' => ':attribute wajib diisi',
        ];
         $validaateData = $request->validate([
            'nama' => 'required',
            'type_barang' => 'required',
        ],$messages);

        
       
        try {
                $product = product::where('sku',$sku)->first();
                
                $product->nama = $request->nama;
                $product->type_barang = $request->type_barang;
                $product->garansi= $request->garansi;
                $product->harga_satuan = $request->price;
                $product->description = $request->description;

                // print_r($product->garansi);
                // die();
                product::where('sku',$sku)->update($product->toArray());
            } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error',$th->getMessage()]);
        }

        return redirect('/product')->with('success', 'Berhasil mengubah data');
    }


}