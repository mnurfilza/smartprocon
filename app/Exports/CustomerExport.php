<?php

namespace App\Exports;

use App\Http\Controllers\OfferingController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\OfferingDetailController;
use App\Models\customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromCollection;



class CustomerExport implements FromCollection
{   



    protected $customer;
    protected $offering;
    protected $offeringDetail;
    protected $request;

    public function __construct(
        customer $customer,
        OfferingController $offering, 
        OfferingDetailController $offeringDetail,
        Request $request)
   
    {
        $this->customer = $customer;
        $this->offering = $offering;
        $this->offeringDetail = $offeringDetail;
        $this->request = $request;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $startDate ="";
        $endDate =  "";
        $kota = "";
        $queries = array();

        try {
            if (!empty($this->request->input('startDate'))  && !empty($this->request->input('endDate'))) {
                $startDate = $this->request->input('startDate');
                $endDate = $this->request->input('endDate');
    
                $queries = [['create_at', '>=', $startDate], ['create_at', '<=', $endDate]];
            }
    
            $kota= $this->request->input('kota');
            if (!empty($kota)) {
                array_push($queries,['city', '=', $kota]);
            }
    
           $customers = $this->customer->where($queries)->get();
           foreach ($customers as $key => $value) {
               # code...
                 echo '<pre>';
               print_r($value->create_at);
               print_r(" ");
               print_r($value->city);
               echo '</pre>';
           }
            // print_r($this->request->input('startDate'));
            die();
        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }

        return customer::all();
    }


}
