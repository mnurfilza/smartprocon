<?php

namespace App\Http\Controllers;

use App\Models\customer;
use App\Models\Offering;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $customer = customer::all();
        return customer::all();
        //
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //save data to database customer
        $customer = new customer;
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->phone_number = $request->input('phone_number');
        $customer->city = $request->input('city');
        $customer->created_at = Carbon::now();
        $customer->save();
        
        //Offering
        $offering = new Offering;
        $offering->customer_id=$customer->id;
        $offering->option=$request->input('option');
        $offering->number_of_floors=$request->input('number_of_floors');
        $offering->number_of_rooms=$request->input('number_of_rooms');
        $offering->system = $request->input('system');
        $offering->save();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(customer $customer)
    {

        
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(customer $customer)
    {
        //
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
