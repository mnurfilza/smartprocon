<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $objects = [
            [
                'sku' => 'GES-WS3G-EU-W',
                'nama' =>'Smart Switch Wifi 3 Gang',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.20 ',
                'harga_satuan' => '250000',
                'create_at'=>Carbon::now(),

            ],
            [
                'sku' => 'GES-SWDS-EU1G-W',
                'nama' =>'Smart Switch Dimmer wifi 1 Gang                ',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.20 ',
                'harga_satuan' => '300000',
                'create_at'=>Carbon::now(),

            ],
            [
                'sku' => 'GES-LBRGB-9W-W',
                'nama' =>'Smart WiFi LED bulb',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.20 ',
                'harga_satuan' => '150000',
                'create_at'=>Carbon::now(),
            ],
            [
                'sku' => 'GES-RGB-LS-5M-W',
                'nama' =>'Smart RGB Strips WIFI',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.40 ',
                'harga_satuan' => '300000',
                'create_at'=>Carbon::now(),
            ],
            [
                'sku' => 'GES-LBFD-7.5W-W',
                'nama' =>'Smart Filament',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.40 ',
                'harga_satuan' => '200000',
                'create_at'=>Carbon::now(),
            ],
            [
                'sku' => 'GES-SP-EU-W',
                'nama' =>'Smart Plug',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '0.40 ',
                'harga_satuan' => '200000',
                'create_at'=>Carbon::now(),
            ],
            [
                'sku' => 'GES-SCPTC-27',
                'nama' =>'Smart Camera Wifi, 1080P',
                'type_barang' => 'Small',
                'garansi' => '12',
                'berat_barang'=> '1.00 ',
                'harga_satuan' => '200000',
                'create_at'=>Carbon::now(),
            ]
            
            ];

            DB::table('products')->insert($objects);
    }
}
