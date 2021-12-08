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
        $filename = 'customers_'.Carbon::now().'.xlsx';
        return Excel::download(new CustomerExport(
            new customer(),$request),$filename);
    }
}
