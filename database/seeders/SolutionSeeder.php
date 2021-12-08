<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SolutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $solutions =[
            [
                'nama_solution' => 'Lighting Control',
                'keterangan' =>'Lighting Control',
            ],
            [
                'nama_solution' => 'Audio & Video Control',
                'keterangan' =>'Audio & Video Control',
            ],
            [
                'nama_solution' => 'Access Control & Security ',
                'keterangan' =>'Access Control & Security ',
            ],
            [
                'nama_solution' => 'Indoor Comfort',
                'keterangan' =>'Indoor Comfort',
            ],
            [
                'nama_solution' => 'Smart Security',
                'keterangan' =>'Smart Security',
            ],
            [
                'nama_solution' => 'Connectifity',
                'keterangan' =>'Connectifity',
            ],
        ];
        DB::table('solutions')->insert($solutions);    
    }
}
