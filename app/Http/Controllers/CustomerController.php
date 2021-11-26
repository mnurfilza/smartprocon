<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\customer;
use App\Models\Offering;
use App\Models\solution;
use App\Models\type_object;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use GuzzleHttp\Psr7\Request as Psr7Request;
use PhpParser\Node\Stmt\TryCatch;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $param = ['data'=>customer::paginate(10)];
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save data to database customer

        try {

            foreach ($request->input('solution') as $key => $value) {



                $citi = new citi();
                $citi->id = $request->input('kota');

                $customer = new customer;
                $customer->name = $request->input('name');
                $customer->email = $request->input('email');
                $customer->phone_number = $request->input('phone_number');
                $customer->city = CitiController::show($citi)->nama_kota;
                $customer->country = $request->input('country');
                $customer->create_at = Carbon::now();
                $customer->save();
    
                $offering = new Offering;
                $offering->id_customer=$customer->id;
                $offering->customer = $customer->name;
                $floorAndRooms = explode("-",$request->input('floor-and-rooms'));
                $offering->number_of_floors = $floorAndRooms[0];
                $offering->number_of_rooms = $floorAndRooms[1];
                $offering->object_id = $request->input('object');
                $offering->object = type_object::find($request->input('object'))->nama_object;
                $offering->budget = $request->input('budget');
                $offering->id_solution = $value;
                $offering->solution = solution::find($value)->nama_solution;
                $offering->save();
            }
 
            $modules = new ModulesController;
            $modules->process($request->input('solution'));

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
      
        return redirect()->view('');
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
        $param =['old'=> $this->show($customer),'offer'=> $offering->where('id_customer',$customer->id)->get()]; 
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
