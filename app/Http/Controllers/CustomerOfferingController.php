<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ongkir;
use App\Models\ongkos_pasang;
use App\Models\ParamConfig;
use App\Models\product;
use App\Models\modules;
use App\Models\SubSolutionPackage;
use App\Models\type_object;
use Carbon\Carbon;
use App\Models\citi;
use App\Models\customer;
use App\Models\Offering;
use App\Models\OfferingDetail;
use App\Models\solution;


class CustomerOfferingController extends Controller
{

    public function postOffering(Request $request)
    {
        //save data to database customer

        $messages = [
            'required' => ':attribute wajib diisi',
            'min' => ':attribute kurang dari :min digit'
        ];
        $request->validate([
            'kota' => 'required',
            'object' => 'required',
            'floor-and-rooms' => 'required',
            'solution' => 'required',
            'name' => 'required',
            'phone_number' => 'required|min:10',
            'email' => 'required',
            'country' => 'required',
        ], $messages);

        $offerings = array();
        $links = array();


        try {

            $kota = explode("-", $request->input('kota'));
            $citi = new citi();
            $citi->id = $kota[0];


            $modelOngkir = new ongkir();
            $modelOngkir->id_kota = $citi->id;
            $ongkirCtr = new  OngkirController();
            $ongkir = $ongkirCtr->searchOngkirByCity($modelOngkir);

            //validasi ongkir
            if (empty($ongkir)) {
                throw new \Exception("Ongkir Tidak Ada Untuk :" . " " . $kota[1]);

            }

            //find ongkos pasang
            $modelOngkosPasang = new ongkos_pasang();
            $modelOngkosPasang->id_kota = $citi->id;
            $ongkosPasangCtr = new OngkosPasangController();
            $ongkosPasangValidation = $ongkosPasangCtr->getOngkosPasangByCity($modelOngkosPasang);

            //validasi ongkospasang
            if (empty($ongkosPasangValidation)) {
                throw new \Exception("Ongkos Pasang Tidak Ada Untuk :" . " " . $kota[1]);

            }

            /*save data to database offering_details
              find solution package */

            $ids = array();
            $spCtr = new SolutionsPackageController();
            foreach ($request->input('solution') as $key => $value) {
                //check solution package
                $solutionPackage = $spCtr->getSolution($value, $request->input('object'));
                if (empty($solutionPackage)) {
                    continue;
                }
                array_push($ids, $solutionPackage->id);
            }


            if (count($ids) == 0) {
                throw new \Exception("Package Solution Not Exists");
            }

            $tbr = SubSolutionPackage::whereIn('id_solution_package', $ids)->get();
            if (empty($tbr)) {
                throw new \Exception("Paket Yang Anda Pilih Tidak Tersedia");
            }

            if (count($tbr) == 0) {
                throw new \Exception("Paket Yang Anda Pilih Tidak Tersedia");
            }
            $customer = new customer;
            $customer->name = $request->input('name');
            $customer->email = $request->input('email');
            $customer->phone_number = $request->input('phone_number');
            $citiCtr = new CitiController();
            $customer->city = $citiCtr->show($citi)->nama_kota;
            $customer->country = $request->input('country');
            $customer->create_at = Carbon::now()->format('Y-m-d');
            $customer->save();

            foreach ($request->input('solution') as $key => $value) {

                $offering = new Offering;
                $offering->id_customer = $customer->id;
                $offering->customer = $customer->name;
                $floorAndRooms = explode("-", $request->input('floor-and-rooms'));
                $offering->number_of_floors = $floorAndRooms[0];
                $offering->number_of_rooms = $floorAndRooms[1];
                $offering->object_id = $request->input('object');
                $offering->object = type_object::find($request->input('object'))->nama_object;
                $offering->budget = $request->input('budget');
                $offering->id_solution = $value;
                $offering->solution = solution::find($value)->nama_solution;
                $offering->save();


                //itungan untuk jumlah barang
                $spCtr = new SolutionsPackageController();
                $solutionPackage = $spCtr->getSolution($value, $request->input('object'));
                $modelSub = new SubSolutionPackage();
                $modelSub->id_solution_package = $solutionPackage->id;
                $subCtr = new SubSolutionPackageController();
                $solutionSubPackage = $subCtr->search($modelSub);
                foreach ($solutionSubPackage as $key => $ssp) {
                    $floorAndRooms = explode("-", $request->input('floor-and-rooms'));
                    $modelBarang = new product();
                    $modelBarang->sku = $ssp->sku;
                    $productCtr = new ProductController();
                    $barang = $productCtr->show($modelBarang);
                    $modelOngkosPasang->type_barang = $barang->type_barang;
                    $ongkosPasang = $ongkosPasangCtr->getOngkosPasangByCityAndTipebarang($modelOngkosPasang);
                    
    
                    $jumlah = 0;
                    $hargaSatuan = 0;
                    $total = 0;
    
    
                    if ($ssp->ruangan == 1 && $ssp->lantai == 1) {
                        $jumlah = (integer)$ssp->jumlah * (integer)$floorAndRooms[0] * (integer)$floorAndRooms[1];
                        $hargaSatuan = (integer)$ssp->jumlah * (integer)$floorAndRooms[0] * (integer)$floorAndRooms[1] * (integer)$barang->harga_satuan;
                    } elseif ($ssp->ruangan == 1) {
                        $jumlah = (integer)$ssp->jumlah * (integer)$floorAndRooms[1];
                        $hargaSatuan = (integer)$ssp->jumlah * (integer)$floorAndRooms[1] * (integer)$barang->harga_satuan;
    
                    } elseif ($ssp->lantai == 1) {
                        $jumlah = (integer)$ssp->jumlah * (integer)$floorAndRooms[0];
                        $hargaSatuan = (integer)$ssp->jumlah * (integer)$floorAndRooms[0] * (integer)$barang->harga_satuan;
                    }

                    $ongkos_kirim = (float)$barang->berat_barang * (integer)$ongkir->price;
    
    
                    $offeringDetail = new OfferingDetail();
                    $offeringDetail->offering_id = $offering->id;
                    $offeringDetail->sku = $ssp->sku;
                    $offeringDetail->nama_produk = $ssp->nama_barang;
                    $offeringDetail->qty = $jumlah;
                    $offeringDetail->harga = $barang->harga_satuan;
                    $offeringDetail->ongkir = $ongkos_kirim;
                    
                    if(!empty($ongkosPasang)){
                        $offeringDetail->ongkos_pasang = $ongkosPasang->harga;
                    }else{
                        $offeringDetail->ongkos_pasang = 0;
                    }

                    $total = (integer)$ongkos_kirim + (integer)$offeringDetail->ongkos_pasang + (integer)$hargaSatuan;
                    $offeringDetail->total = $total;
                    
                    $offeringDetail->save();
                    

                    array_push($offerings, $offeringDetail);
                    
                }
                

                //should return data for module
                
                $module = new modules();
                $modules = $module->where('id_solutions', '=', $value)->first();
                array_push($links, $modules);

                $config = new ParamConfig();
            }

            



        } catch (\Throwable $th) {
            return back()->withErrors([$th->getMessage()]);
        }

        // die();


        return view('frontend.pages.result', ['isOffering' => $config->where('desc', 'ShowOffering')->first()->value, 'module' => $links, 'offering' => $offerings]);
    }

}
