<?php

namespace App\Http\Controllers;

use App\Exports\CustomerExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\customer;
use Carbon\Carbon;


class ExportController extends Controller
{
    public function exportToExcel(Request $request)
    {
        try {
            $messages = [
                'required' => ':attribute wajib diisi',
            ];
            $request->validate([
                'startDate' => 'required',
                'endDate' => 'required',

            ],$messages);


            $data = new CustomerExport(new customer(),$request);
            $filename = 'customers_'.Carbon::now()->format('Y-m-d').'.xlsx';
        }catch (\Throwable $th){
            return back()->withErrors(['Error Coba Hubungi team pengembang']);
        }

        return Excel::download($data, $filename);
    }
}

