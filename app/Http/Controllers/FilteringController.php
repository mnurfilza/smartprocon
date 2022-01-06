<?php

namespace App\Http\Controllers;

use App\Models\modules;
use App\Models\solutions_package;
use App\Models\SubSolutionPackage;
use App\Models\type_object;
use Illuminate\Http\Request;
use App\Models\ongkir;
use App\Models\ongkos_pasang;
use App\Models\product;
use App\Models\customer;
use App\Models\solution;
use App\Models\citi;
use phpDocumentor\Reflection\Types\Object_;


class FilteringController extends Controller
{
    //
    public function filtering(Request $request)
    {

        try {
            $filter = $request->query('filter');
            $param = ['data' => ongkir::where('kota', 'like', '%' . $filter . '%')->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }
        return view('dashboard.ongkir.ongkir', $param);
    }

    public function filtering_pasang(Request $request)
    {

        try {
            $filter = $request->query('filter');
            $param = ['data' => ongkos_pasang::where('kota', 'like', '%' . $filter . '%')
                ->orWhere('provinsi', 'like', '%' . $filter . '%')
                ->orWhere('type_barang', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }
        return view('dashboard.ongkos_pasang.ongkos_pasang', $param);
    }


    public function filtering_barang(Request $request)
    {
        try {
            //code...
            $filter = $request->query('filter');
            $param = ['data' => product::where('nama', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }
        return view('dashboard.barang.barang', $param);
    }


    public function filtering_customer(Request $request)
    {
        try {
            //code...
            $filter = $request->query('filter');
            $param = ['data' => customer::where('name', 'like', '%' . $filter . '%')
                ->orWhere('email', 'like', '%' . $filter . '%')
                ->orWhere('phone_number', 'like', '%' . $filter . '%')
                ->orWhere('city', 'like', '%' . $filter . '%')
                ->orWhere('country', 'like', '%' . $filter . '%')
                ->paginate(10), 'regional' => citi::all(), 'solution' => solution::all()];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }
        return view('dashboard.customer.customer', $param);


    }

    public function filtering_subpackage(Request $request)
    {
        try {
            $filter = $request->query('filter');
            $param = ['data' => SubSolutionPackage::where('nama_barang', 'like', '%' . $filter . '%')
                ->orWhere('sku', 'like', '%' . $filter . '%')
                ->orWhere('package', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);

        }

        return view('dashboard.sub_solution_package.sub_solution_package', $param);
    }


    public function filtering_solution(Request $request)
    {
        try {
            $filter = $request->query('filter');

            $param = ['data' => solution::where('nama_solution', 'like', '%' . $filter . '%')
                ->orWhere('keterangan', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);

        }

        return view('dashboard.solution.solution', $param);
    }


    public function filtering_solution_package(Request $request)
    {
        try {
            $filter = $request->query('filter');

            $param = ['data' => solutions_package::where('nama_solution', 'like', '%' . $filter . '%')
                ->orWhere('nama_object', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th) {
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }

        return view('dashboard.solution_package.solution_package', $param);
    }

    public function filtering_object(Request $request)
    {
        try {
            $filter = $request->query('filter');

            $param = ['data' => type_object::where('nama_object', 'like', '%' . $filter . '%')
                ->orWhere('keterangan', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th){
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }
        return view('dashboard.object.object',$param);
    }


    public function filtering_modules(Request $request)
    {
        try {
            $filter = $request->query('filter');

            $param = ['data' => modules::where('solutions', 'like', '%' . $filter . '%')
                ->paginate(10)];
        } catch (\Throwable $th){
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }

        return view('dashboard.modules.modules',$param);
    }
}
