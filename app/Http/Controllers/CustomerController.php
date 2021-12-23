<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\customer;
use App\Models\Offering;
use App\Models\OfferingDetail;

use App\Models\solution;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=>customer::orderBy('id','desc')->paginate(10),'regional'=>citi::all(),'solution'=>solution::all()];
        return view('dashboard.customer.customer',$param);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {
        return customer::find($customer->id);   

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {

        $offering = new Offering;
        $resOffering = $offering->where('id_customer',$customer->id)->get();
        $offeringDetail = new OfferingDetail;

        $offer = [];
        foreach ($resOffering as $key => $value) {
           
            $offeringDetail->offering_id = $value->id;
            $offeringCtr = OfferingDetailController::getOfferingDetail($offeringDetail);
           
            foreach ($offeringCtr as $keys => $v) {
                array_push($offer,$v);
            }

        }
        $param =[
            'old'=> $this->show($customer),
            'offer'=> $offer,
            'of'=> $resOffering,
        ]; 
        return view('dashboard.customer.form_customer',$param);  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(customer $customer)
    {
        //
    }

    
}

