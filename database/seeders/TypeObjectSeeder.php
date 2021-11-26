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
        DB::table('type_objects')->insert([
            'nama_object' => 'Apartement',
            'keterangan' =>'Lighting',
        ]);    
    }
}
