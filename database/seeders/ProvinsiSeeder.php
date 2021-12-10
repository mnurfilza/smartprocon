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

        $response = Http::get('https://emsifa.github.io/api-wilayah-indonesia/api/provinces.json');

        $data = array();
        foreach ($response->json() as $provinsi) {
            $data[] = [
                'id'=> $provinsi['id'],
                'nama'=> $provinsi['name'],
            ];
        }

        DB::table('provinsis')->insert($data);


        foreach ($data as $key => $value)   {
            $url = "https://emsifa.github.io/api-wilayah-indonesia/api/regencies/{$value['id']}.json";
            $citiesRes = Http::get($url);
            $c = array();
            

           
            foreach ($citiesRes->json() as  $city) {
                DB::table('regional')->insert([
                    'id'=>$city['id'],
                    'id_provinsi' => $city['province_id'],
                    'provinsi'=>$value['nama'],
                    'nama_kota' => $city['name'],
                ]);

            }
           

        }

        
    }
}
