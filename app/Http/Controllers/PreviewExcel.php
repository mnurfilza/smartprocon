<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use App\Models\solution;
use App\Models\Offering;
use App\Models\OfferingDetail;


class PreviewExcel extends Controller
{
    public function previewExportToExcel(Request $request)
    {
            $data = $this->preview(new customer(),$request);
            // echo '<pre>';
            // foreach ($data as $key => $value) {
            //     print_r($value);
            //     # code...
            // }

            // print_r($request->all());
            // echo '</pre>';
            // die();
         return view('dashboard.customer.preview',['data'=>$data,'old'=>$request->all(),'solution'=>solution::all()]);
        
    }


    public function preview(customer $customer, Request $request)
    {
        $startDate ="";
        $endDate =  "";
        $kota = "";
        $queries = array();
        $data = array();
        try {
            if (!empty($request->input('startDate'))  && !empty($request->input('endDate'))) {
                $startDate = $request->input('startDate');
                $endDate = $request->input('endDate');
    
                $queries = [['create_at', '>=', $startDate], ['create_at', '<=', $endDate]];
            }
    
            $kota= $request->input('kota');
            if (!empty($kota)) {
                array_push($queries,['city', '=', $kota]);
            }
           $customers = $customer->where($queries)->get();
           $offer = new Offering();
           foreach ($customers as $key => $value) {
            if (!empty($request->input('solution'))) {
                $offerings =$offer->where('id_customer',$value->id)->whereIn('solution',$request->input('solution'))->get();
            }else{
                $offerings =$offer->where('id_customer',$value->id)->get();
            }
            
            foreach ($offerings as $key => $offering) {
                # code.
                if (!empty($offering)) {
                    $detailOffering = new OfferingDetail(); 
                    $details = $detailOffering->where('offering_id',$offering->id)->get();
                    foreach ($details as $key => $detail) {
                        if (!empty($detail)) {
                            
                            $data[]= [
                                "customer" => $value->name,
                                "phone_number" => $value->phone_number,
                                "kota" => $value->city,
                                "sku" => $detail->sku,
                                "nama_produk" => $detail->nama_produk,
                                "solution" => $offering->solution,
                                "object" => $offering->object,
                                "qty" => $detail->qty, 
                                "harga" => "Rp.".(!empty($detail->harga)? $detail->harga:'0'),
                                "ongkir" => "Rp.".(!empty($detail->ongkir)? $detail->ongkir:'0'),
                                "ongkos_pasang" => "Rp.".(!empty($detail->ongkos_pasang)? $detail->ongkos_pasang:'0'),
                                "total" => "Rp.".$detail->total,
                                   
                            ];
                        }
                    }
                }
            }
        }
              
            // print_r($this->request->input('startDate'));
        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }

        
        return $data;
    }
}
