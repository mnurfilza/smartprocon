<?php

namespace App\Exports;

use App\Http\Controllers\OfferingController;
use App\Http\Controllers\CustomerController;

use App\Http\Controllers\OfferingDetailController;
use App\Models\customer;
use App\Models\Offering;
use App\Models\OfferingDetail;
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
        Request $request)
   
    {
        $this->customer = $customer;
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
        $solution = "";
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
           $offer = new Offering();
           foreach ($customers as $key => $value) {
            echo "<pre>";

            if (!empty($this->request->input('solution'))) {
                $offering =$offer->where('id_customer',$value->id)->whereIn('solution',$this->request->input('solution'))->first();
            }else{

                $offering =$offer->where('id_customer',$value->id)->first();

            }

            // if (!empty($this->request->input('solution'))) {
            //     foreach ($this->request->input('solution') as $key => $ofer ) {
            //         if ($ofer === $offering->solution) {
                        

            //             print_r("masuk kemari");
            //             $detailOffering = new OfferingDetail(); 
            //             $details = $detailOffering->where('offering_id',$ofer->id)->get();

            //             print_r($details);
                        
            //         }
                    
            //     }

                
            // }
            

            print_r($offering->id);
            

            $detailOffering = new OfferingDetail(); 
            $details = $detailOffering->where('offering_id',$offering->id)->first();

            print_r($details);
           
             echo "</pre>";
           }
            // print_r($this->request->input('startDate'));
            die();
        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }

        return customer::all();
    }


}
