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
        DB::table('solutions')->insert([
            'nama_solution' => 'Lighting',
            'keterangan' =>'Lighting',
        ]);    
    }
}
