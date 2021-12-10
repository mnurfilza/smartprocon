<?php

namespace App\Http\Controllers;

use App\Models\citi;
use App\Models\customer;
use App\Models\Offering;
use App\Models\OfferingDetail;
use App\Models\ongkir;
use App\Models\ongkos_pasang;
use App\Models\product;
use App\Models\solution;
use App\Models\SubSolutionPackage;
use App\Models\type_object;
use Illuminate\Http\Request;
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //save data to database customer

       
        try{
            $citi = new citi();
            $citi->id = $request->input('kota');

            $customer = new customer;
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->phone_number = $request->input('phone_number');
            $citiCtr = new CitiController();
            $customer->city = $citiCtr->show($citi)->nama_kota;
            $customer->country = $request->input('country');
            $customer->create_at = Carbon::now();
            $customer->save();

             //find ongkos pasang
            $modelOngkosPasang = new ongkos_pasang();
            $modelOngkosPasang->id_kota = $citi->id;
            $ongkosPasangCtr = new OngkosPasangController();
            $ongkosPasang = $ongkosPasangCtr->getOngkosPasangByCity($modelOngkosPasang);

            foreach ($request->input('solution') as $key => $value) {

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


                /*save data to database offering_details
                find solution package */
                $spCtr = new SolutionsPackageController();
                $solutionPackage = $spCtr->getSolution($value,$request->input('object'));
                if (empty($solutionPackage)) {
                    throw new \Exception("Solutions Package Not Exist");
                }


                //itungan untuk jumlah barang
                $modelSub = new SubSolutionPackage();
                $modelSub->id_solution_package = $solutionPackage->id;
                $subCtr = new SubSolutionPackageController();
                $solutionSubPackage = $subCtr->search($modelSub);
                foreach ($solutionSubPackage as $key => $value) {
                //findBarang
                $modelBarang = new product();
                $modelBarang->sku = $value->sku;
                $productCtr = new ProductController();
                $barang = $productCtr->show($modelBarang);

                //find ongkos kirim
                $modelOngkir = new ongkir();
                $modelOngkir->id_kota = $citi->id;
                $ongkirCtr = new  OngkirController();
                $ongkir = $ongkirCtr->searchOngkirByCity($modelOngkir);
                $jumlah =0;
                $hargaSatuan=0;
                $total = 0;

                if (empty($ongkir)){
                    throw new \Exception("Ongkir Tidak Ada Untuk :"." ".$customer->city);
                    
                }
                
                if ($value->ruangan == 1 && $value->lantai == 1) {
                    $jumlah = (integer)$value->jumlah * (integer)$floorAndRooms[0] * (integer)$floorAndRooms[1];
                    $hargaSatuan = (integer)$value->jumlah * (integer)$floorAndRooms[0] * (integer)$floorAndRooms[1] * (integer)$barang->harga_satuan;
                }elseif ($value->ruangan == 1) {
                    $jumlah = (integer)$value->jumlah * (integer)$floorAndRooms[1] ;
                    $hargaSatuan = (integer)$value->jumlah * (integer)$floorAndRooms[1] * (integer)$barang->harga_satuan;

                }elseif ($value->lantai == 1) {
                    $jumlah = (integer)$value->jumlah * (integer)$floorAndRooms[0] ;
                    $hargaSatuan = (integer)$value->jumlah * (integer)$floorAndRooms[0] * (integer)$barang->harga_satuan;
                }
                $total = $jumlah * $hargaSatuan;
                $ongkos_kirim = (integer)$barang->berat_barang * (integer)$ongkir->price;
                

             

                $offeringDetail = new OfferingDetail();
                $offeringDetail->offering_id = $offering->id;
                $offeringDetail->sku = $value->sku;
                $offeringDetail->nama_produk = $value->nama_barang;
                $offeringDetail->qty = $jumlah;
                $offeringDetail->harga = $hargaSatuan;
                $offeringDetail->total = $total;
                $offeringDetail->ongkir = $ongkos_kirim;
                $offeringDetail->ongkos_pasang = $ongkosPasang->harga;
                $offeringDetail->save();
            }
                
            }

            //should return data for module
 
            // $modules = new ModulesController;
            // $modules->process($request->input('solution'));

        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
      
        return redirect()->back()->with('success','Data Berhasil Disimpan');
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

