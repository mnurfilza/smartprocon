<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ProvinsiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
      public function run()
        {

        $response = Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi');

        $data = array();
        foreach ($response->json()['provinsi'] as $provinsi) {
            $data[] = [
                'id'=> $provinsi['id'],
                'nama'=> $provinsi['nama'],
            ];
        }

        DB::table('provinsis')->insert($data);


        foreach ($data as $key => $value)   {
            $url = "https://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi={$value['id']}";
            $citiesRes = Http::get($url);
            $c = array();
            
            foreach ($citiesRes->json()['kota_kabupaten'] as  $city) {
                DB::table('regional')->insert([
                    'id'=>$city['id'],
                    'id_provinsi' => $city['id_provinsi'],
                    'provinsi'=>$value['nama'],
                    'nama_kota' => $city['nama'],
                ]);

            }
           

        }

        
    }
}
