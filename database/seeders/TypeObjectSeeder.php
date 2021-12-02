<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeObjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()


    {

        $objects = [
            [
                'nama_object' => 'Apartement',
                'keterangan' =>'Apartement',
            ],
            [
                'nama_object' => 'Commercial Building',
                'keterangan' =>'Commercial Building',
            ],
            [
                'nama_object' => 'Residential',
                'keterangan' =>'Residential',
            ]
            ];
        DB::table('type_objects')->insert($objects);    
    }
}
