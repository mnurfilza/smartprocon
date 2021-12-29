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

        $messages = [
            'required' => ':attribute wajib diisi',
        ];
        $request->validate([
            'startDate' => 'required',
            'endDate' => 'required',

        ],$messages);
      
        $data = new CustomerExport(new customer(),$request);
        $filename = 'customers_'.Carbon::now()->format('Y-m-d').'.xlsx';
        return Excel::download($data, $filename);
    }


   
    
}

