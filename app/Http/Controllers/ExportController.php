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


        $filename = 'customers_'.Carbon::now().'.xlsx';
        return Excel::download(new CustomerExport(
            new customer(),
            new OfferingController,
            new OfferingDetailController,$request),$filename);
    }
}
