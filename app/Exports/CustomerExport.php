<?php

namespace App\Exports;


use App\Models\customer;
use App\Models\Offering;
use App\Models\OfferingDetail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
class CustomerExport implements FromArray,WithColumnWidths,WithHeadings,WithStyles
{



    protected $customer;
    protected $offering;
    protected $offeringDetail;
    protected $request;

    public function __construct(
        customer $customer,
        Request $request)
    {
        $this->customer = $customer;
        $this->request = $request;
    }
    /**
    * @return \Illuminate\Support\Collection
    */

    public function array() :array
    {
        $startDate ="";
        $endDate =  "";
        $kota = "";
        $queries = array();
        $data = array();
        try {
            if (!empty($this->request->input('startDate'))  && !empty($this->request->input('endDate'))) {
                $startDate = $this->request->input('startDate');
                $endDate = $this->request->input('endDate');

                $queries = [['create_at', '>=', $startDate], ['create_at', '<=', $endDate]];
            }

            $kota= $this->request->input('kota');
            if (!empty($kota)) {
                array_push($queries,['city', '=', $kota]);
            }
           $customers = $this->customer->where($queries)->get();
           $offer = new Offering();
           foreach ($customers as $key => $value) {
            if (!empty($this->request->input('solution'))) {
                $offerings =$offer->where('id_customer',$value->id)->whereIn('solution',$this->request->input('solution'))->get();
            }else{
                $offerings =$offer->where('id_customer',$value->id)->get();
            }



            foreach ($offerings as $key => $offering) {
                # code.
                if (!empty($offering)) {
                    $detailOffering = new OfferingDetail();
                    $details = $detailOffering->where('offering_id',$offering->id)->get();
                    foreach ($details as $key => $detail) {
                        if (!empty($detail)) {

                            $data[]= [
                                "customer" => $value->name,
                                "phone_number" => $value->phone_number,
                                "kota" => $value->city,
                                "sku" => $detail->sku,
                                "nama_produk" => $detail->nama_produk,
                                "solution" => $offering->solution,
                                "object" => $offering->object,
                                "qty" => $detail->qty,
                                "harga" => "Rp.".(!empty($detail->harga)? $detail->harga:'0'),
                                "ongkir" => "Rp.".(!empty($detail->ongkir)? $detail->ongkir:'0'),
                                "ongkos_pasang" => "Rp.".(!empty($detail->ongkos_pasang)? $detail->ongkos_pasang:'0'),
                                "total" => "Rp.".$detail->total,

                            ];
                        }
                    }
                }
            }
        }

            // print_r($this->request->input('startDate'));
        } catch (\Throwable $th) {
            return back()->withErrors(['error', $th->getMessage()]);
        }
        return $data;
    }


    // public function columnFormats(): array
    // {
    //     return [
    //         'B' => NumberFormat::FORMAT_DATE_DDMMYYYY,
    //         'C' => NumberFormat::FORMAT_CURRENCY_EUR_SIMPLE,
    //     ];
    // }

    public function headings(): array
    {
        return [
            'Nama',
            'Nomor Telepon',
            'Kota',
            'SKU (Kode Barang)',
            'Nama Barang',
            'Solution',
            'Object',
            'Jumlah',
            'Harga',
            'Ongkos Kirim',
            'Ongkos Pasang',
            'Total'

        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 25,
            'B' => 25,
            'C' => 25,
            'D' => 25,
            'E' => 25,
            'F' => 20,
            'G' => 20,
            'H' => 10,
            'I' => 20,
            'J' => 20,
            'K' => 20,
            'L' => 20,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [

            // Styling a specific cell by coordinate.
            'A1' => ['font' => ['bold' => true]],
            'B1' => ['font' => ['bold' => true]],
            'C1' => ['font' => ['bold' => true]],
            'D1' => ['font' => ['bold' => true]],
            'E1' => ['font' => ['bold' => true]],
            'F1' => ['font' => ['bold' => true]],
            'G1' => ['font' => ['bold' => true]],
            'H1' => ['font' => ['bold' => true]],
            'I1' => ['font' => ['bold' => true]],
            'J1' => ['font' => ['bold' => true]],
            'K1' => ['font' => ['bold' => true]],
            'L1' => ['font' => ['bold' => true]],

        ];
    }

}
